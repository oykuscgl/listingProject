<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogPostRequest;
use App\Http\Requests\ConsumerResearchRequest;
use App\Models\Product;
use App\Models\Recipe;
use App\Models\Service;
use App\Models\Category;
use App\Models\ConsumerResearch;
use App\Models\CompanyInfo;
use App\Models\News;
use App\Models\BlogPost;
use App\Models\HR;
use DOMDocument;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\RecipeRequest;
use App\Http\Requests\NewsPostRequest;
use App\Http\Requests\ServiceRequest;
use App\Http\Requests\InfoRequest;
use App\Http\Requests\HRRequest;
use Illuminate\Support\Facades\Storage;


class AdminController extends Controller
{
    public function dashboard()
    {
        // Admin panelinin ana sayfası
        return view('admin/adminDashboard');
    }



    //PRODUCT CONTROL
    public function manageProducts()
    {
        $products = Product::with('category')->get();
        return view('admin.products.index', compact('products'));
    }

    public function showAddProductForm()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    public function storeProduct(Request $request)
{
    $detailed_description = $request->detailed_description;

    $dom = new DOMDocument();
    $dom->loadHTML($detailed_description, 9);

    $images = $dom->getElementsByTagName('img');

    foreach ($images as $key => $img) {
        $data = base64_decode(explode(',', explode(';', $img->getAttribute('src'))[1])[1]);
        $image_name = "/images/products/" . time(). $key.'png';
        file_put_contents(public_path(). $image_name, $data);

        $img->removeAttribute('src');
        $img->setAttribute('src', $image_name);
    }

    $detailed_description = $dom->saveHTML();

    $product = new Product();
    $product->name = $request->name;
    $product->description = $request->description;
    $product->detailed_description = $detailed_description;
    $product->stock = $request->stock;
    $product->price = $request->price;
    $product->category_id = $request->category_id;
    $product->shelf_life = $request->shelf_life;
    $product->product_code = $request->product_code;
    $product->pallet = $request->pallet;
    $product->packaging = $request->packaging;
    $product->specialCategory = $request->specialCategory;

    if ($request->hasFile('image')) {
        $image_file = $request->file('image');
        $image_name = time() . '.' . $image_file->getClientOriginalExtension();
        $image_path = $image_file->storeAs('images/products', $image_name, 'public');
        $product->image = $image_path;
    }

    $product->save();

    return redirect()->route('admin.products.index')->with('success', 'Ürün başarıyla eklendi.');
}

public function updateProduct(Request $request, Product $product)
{
    $detailed_description = $request->detailed_description;

    $dom = new DOMDocument();
    $dom->loadHTML($detailed_description, 9);

    $images = $dom->getElementsByTagName('img');

    foreach ($images as $key => $img) {
        $data = base64_decode(explode(',', explode(';', $img->getAttribute('src'))[1])[1]);
        $image_name = "/images/products/" . time(). $key.'png';
        file_put_contents(public_path(). $image_name, $data);

        $img->removeAttribute('src');
        $img->setAttribute('src', $image_name);
    }

    $detailed_description = $dom->saveHTML();

    $product->name = $request->name;
    $product->description = $request->description;
    $product->detailed_description = $detailed_description;
    $product->stock = $request->stock;
    $product->price = $request->price;
    $product->category_id = $request->category_id;
    $product->shelf_life = $request->shelf_life;
    $product->product_code = $request->product_code;
    $product->pallet = $request->pallet;
    $product->packaging = $request->packaging;
    $product->specialCategory = $request->specialCategory;

    if ($request->hasFile('image')) {
        // Delete old image if it exists
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }
        $image_file = $request->file('image');
        $image_name = time() . '.' . $image_file->getClientOriginalExtension();
        $image_path = $image_file->storeAs('images/products', $image_name, 'public');
        $product->image = $image_path;
    }

    $product->save();

    return redirect()->route('admin.products.index')->with('success', 'Ürün başarıyla güncellendi.');
}


    public function showEditProductForm(Product $product)
    {
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }


    public function deleteProduct(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully');
    }


    //RECIPE CONTROL

    public function recipeManagement()
    {
        $recipes = Recipe::with('category')->get();
        return view('admin.recipes.index', compact('recipes'));
    }

    public function showAddRecipeForm()
    {
        $categories = Category::all();
        return view('admin.recipes.create', compact('categories'));
    }

    public function storeRecipe(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'detailed_info' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $detailed_info = $request->detailed_info;

        $dom = new DOMDocument();
        $dom->loadHTML($detailed_info, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            $data = base64_decode(explode(',', explode(';', $img->getAttribute('src'))[1])[1]);
            $image_name = "images/recipe/" . time() . $key . '.png';  // Dosya yolunu belirleyin
            file_put_contents(public_path($image_name), $data);

            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }

        $detailed_info = $dom->saveHTML();

        $recipe = new Recipe();
        $recipe->title = $request->title;
        $recipe->description = $request->description;
        $recipe->category_id = $request->category_id;
        $recipe->detailed_info = $detailed_info;

        if ($request->hasFile('image')) {
            $image_file = $request->file('image');
            $image_name = time() . '.' . $image_file->getClientOriginalExtension();
            $image_path = $image_file->storeAs('images/recipe', $image_name, 'public');
            $recipe->image = $image_path;
        }

        $recipe->save();

        return redirect()->route('admin.recipes.index')->with('success', 'Tarif başarıyla eklendi.');
    }

    public function updateRecipe(Request $request, Recipe $recipe)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'detailed_info' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $detailed_info = $request->detailed_info;

        $dom = new DOMDocument();
        $dom->loadHTML($detailed_info, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            $data = base64_decode(explode(',', explode(';', $img->getAttribute('src'))[1])[1]);
            $image_name = "/images/recipe/" . time() . $key . '.png';
            file_put_contents(public_path() . $image_name, $data);

            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }

        $detailed_info = $dom->saveHTML();

        $recipe->title = $request->title;
        $recipe->description = $request->description;
        $recipe->category_id = $request->category_id;
        $recipe->detailed_info = $detailed_info;

        if ($request->hasFile('image')) {
            if ($recipe->image) {
                Storage::disk('public')->delete($recipe->image);
            }
            $imagePath = $request->file('image')->store('images/recipe', 'public');
            $recipe->image = $imagePath;
        }

        $recipe->save();

        return redirect()->route('admin.recipes.index')->with('success', 'Tarif başarıyla güncellendi.');
    }

    public function showEditRecipeForm(Recipe $recipe)
    {
        $categories = Category::all();
        return view('admin.recipes.edit', compact('recipe', 'categories'));
    }


    public function destroyRecipe(Recipe $recipe)
    {
        $recipe->delete();
        return redirect()->route('admin.recipes.index')->with('success', 'Tarif başarıyla silindi.');
    }


    //NEWS CONTROL
    public function newsManagement()
    {
        // Haberler yönetimi sayfası
        $news = News::all('id','title');
        return view('admin.news.index', compact('news'));
    }

    public function showAddNewsForm()
    {
        $news = News::all();
        return view('admin.news.create', compact('news'));
    }

    public function createNews()
    {
        return view('admin.news.create');
    }

    public function storeNews(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'detailed_info' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $detailed_info = $request->detailed_info;

        $dom = new DOMDocument();
        $dom->loadHTML($detailed_info, 9);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            $data = base64_decode(explode(',', explode(';', $img->getAttribute('src'))[1])[1]);
            $image_name = "/images/news" . time(). $key.'png';
            file_put_contents(public_path(). $image_name, $data);

            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }

        $detailed_info = $dom->saveHTML();


        $newsPost = new News();
        $newsPost->title = $request->title;
        $newsPost->description = $request->description;
        $newsPost->category = $request->category;
        $newsPost->detailed_info = $detailed_info;

        if ($request->hasFile('image')) {
            $image_file = $request->file('image');
            $image_name = time() . '.' . $image_file->getClientOriginalExtension();
            $image_path = $image_file->storeAs('images/recipe', $image_name, 'public');
            $newsPost->image = $image_path;
        }

        $newsPost->save();

        return redirect()->route('admin.news.index')->with('success', 'Haber başarıyla eklendi.');
    }
    public function updateNews(Request $request, News $newsPost)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'detailed_info' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $detailed_info = $request->detailed_info;

        $dom = new DOMDocument();
        $dom->loadHTML($detailed_info, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            $data = base64_decode(explode(',', explode(';', $img->getAttribute('src'))[1])[1]);
            $image_name = "/images/news/" . time() . $key . '.png';
            file_put_contents(public_path() . $image_name, $data);

            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }

        $detailed_info = $dom->saveHTML();

        $newsPost->title = $request->title;
        $newsPost->description = $request->description;
        $newsPost->category = $request->category;
        $newsPost->detailed_info = $detailed_info;

        if ($request->hasFile('image')) {
            if ($newsPost->image) {
                Storage::disk('public')->delete($newsPost->image);
            }
            $imagePath = $request->file('image')->store('images/news', 'public');
            $newsPost->image = $imagePath;
        }

        $newsPost->save();
        return redirect()->route('admin.news.index')->with('success', 'Haber başarıyla güncellendi.');
    }
    public function editNews($id)
    {
        $new = News::findOrFail($id);
        return view('admin.news.edit', compact('new'));
    }



    public function destroyNews($news_id)
    {
        // Haber kaydını bul ve sil
        $news = News::findOrFail($news_id);
        $news->delete();
        return redirect()->route('admin.news.index')->with('success', 'Haber başarıyla silindi.');
    }

    //SERVICE CONTROL
    public function servicesManagement()
    {
        // Haberler yönetimi sayfası
        $services = Service::all('id','title');
        return view('admin.services.index', compact('services'));
    }

    public function showAddServiceForm()
    {
        $services = Service::all();
        return view('admin.services.create', compact('services'));
    }

    public function storeServices(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'detailed_info' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $detailed_info = $request->detailed_info;

        $dom = new DOMDocument();
        $dom->loadHTML($detailed_info, 9);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            $data = base64_decode(explode(',', explode(';', $img->getAttribute('src'))[1])[1]);
            $image_name = "/images/services" . time(). $key.'png';
            file_put_contents(public_path(). $image_name, $data);

            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }

        $detailed_info = $dom->saveHTML();


        $service = new Service();
        $service->title = $request->title;
        $service->description = $request->description;
        $service->detailed_info = $detailed_info;

        if ($request->hasFile('image')) {
            $image_file = $request->file('image');
            $image_name = time() . '.' . $image_file->getClientOriginalExtension();
            $image_path = $image_file->storeAs('images/services', $image_name, 'public');
            $service->image = $image_path;
        }

        $service->save();

        return redirect()->route('admin.services.index')->with('success', 'Tarif başarıyla eklendi.');
    }

    public function updateServices(Request $request, Service $service)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'detailed_info' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $detailed_info = $request->detailed_info;

        // Clean up the HTML to make sure it's well-formed
        $detailed_info = $this->cleanHtml($detailed_info);

        $dom = new DOMDocument();

        // Suppress warnings due to malformed HTML
        libxml_use_internal_errors(true);
        $dom->loadHTML($detailed_info, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        libxml_clear_errors();

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            $src = $img->getAttribute('src');
            $parts = explode(',', $src);
            if (count($parts) < 2) {
                continue; // Skip if not a valid base64 image
            }

            $data = base64_decode($parts[1]);
            $image_name = "/images/services/" . time() . $key . '.png';
            file_put_contents(public_path() . $image_name, $data);

            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }

        $detailed_info = $dom->saveHTML();

        $service->title = $request->title;
        $service->description = $request->description;
        $service->detailed_info = $detailed_info;

        if ($request->hasFile('image')) {
            if ($service->image) {
                Storage::disk('public')->delete($service->image);
            }
            $imagePath = $request->file('image')->store('images/services', 'public');
            $service->image = $imagePath;
        }

        $service->save();

        return redirect()->route('admin.services.index')->with('success', 'Service successfully updated.');
    }

    private function cleanHtml($html)
    {
        // Perform some cleanup or validation here if needed
        return $html;
    }


    public function editServices($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.services.edit', compact('service'));
    }



    public function destroyServices($service_id)
    {
        // Haber kaydını bul ve sil
        $services = Service::findOrFail($service_id);
        $services->delete();
        return redirect()->route('admin.services.index')->with('success', 'Haber başarıyla silindi.');
    }



    //CONSUMER RESEARCH CONTROL
    public function consumerResearchManagement()
    {
        // Tüketici araştırmaları sayfası
        $researches = ConsumerResearch::all();
        return view('admin.consumerResearches.index', compact('researches'));
    }

    public function showAddResearchForm()
    {
        $researches = ConsumerResearch::all();
        return view('admin.consumerResearches.create', compact('researches'));
    }

    public function createResearch()
    {
        return view('admin.consumerResearches.create');
    }

    public function storeResearch(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'detailed_info' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $detailed_info = $request->detailed_info;

        $dom = new DOMDocument();
        $dom->loadHTML($detailed_info, 9);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            $data = base64_decode(explode(',', explode(';', $img->getAttribute('src'))[1])[1]);
            $image_name = "/images/researches" . time(). $key.'png';
            file_put_contents(public_path(). $image_name, $data);

            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }

        $detailed_info = $dom->saveHTML();


        $research = new ConsumerResearch();
        $research->title = $request->title;
        $research->description = $request->description;
        $research->detailed_info = $detailed_info;

        if ($request->hasFile('image')) {
            $image_file = $request->file('image');
            $image_name = time() . '.' . $image_file->getClientOriginalExtension();
            $image_path = $image_file->storeAs('images/researches', $image_name, 'public');
            $research->image = $image_path;
        }

        $research->save();

        return redirect()->route('admin.consumerResearches.index')->with('success', 'Araştırma başarıyla eklendi.');
    }

    public function updateResearch(Request $request, ConsumerResearch $research)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'detailed_info' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $detailed_info = $request->detailed_info;

        $dom = new DOMDocument();
        $dom->loadHTML($detailed_info, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            $data = base64_decode(explode(',', explode(';', $img->getAttribute('src'))[1])[1]);
            $image_name = "/images/researches/" . time() . $key . '.png';
            file_put_contents(public_path() . $image_name, $data);

            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }

        $detailed_info = $dom->saveHTML();

        $research->title = $request->title;
        $research->description = $request->description;
        $research->detailed_info = $detailed_info;

        if ($request->hasFile('image')) {
            if ($research->image) {
                Storage::disk('public')->delete($research->image);
            }
            $imagePath = $request->file('image')->store('images/researches', 'public');
            $research->image = $imagePath;
        }

        $research->save();

        return redirect()->route('admin.researches.index')->with('success', 'Araştırma başarıyla güncellendi.');
    }
    public function editResearch($id)
    {
        $research = ConsumerResearch::findOrFail($id);
        return view('admin.consumerResearches.edit', compact('research'));
    }



    public function destroyResearch($research_id)
    {
        // Haber kaydını bul ve sil
        $researches = ConsumerResearch::findOrFail($research_id);
        $researches->delete();
        return redirect()->route('admin.consumerResearches.index')->with('success', 'Haber başarıyla silindi.');
    }




    //BLOG CONTROL
    public function blogManagement()
    {
        // Blog yönetimi sayfası
        $blogs = BlogPost::all();
        return view('admin.blogs.index', compact('blogs'));
    }

    public function seeBlogPost($id)
    {
        $blog = BlogPost::findOrFail($id);
        return view('admin.blogs.show', compact('blog'));
    }

    public function showAddBlogPostForm()
    {
        $blogs = BlogPost::all();
        return view('admin.blogs.create', compact('blogs'));
    }

    public function storeBlogPost(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'detailed_info' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $detailed_info = $request->detailed_info;

        $dom = new DOMDocument();
        $dom->loadHTML($detailed_info, 9);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            $data = base64_decode(explode(',', explode(';', $img->getAttribute('src'))[1])[1]);
            $image_name = "/images/blogs" . time(). $key.'png';
            file_put_contents(public_path(). $image_name, $data);

            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }

        $detailed_info = $dom->saveHTML();


        $blog = new BlogPost();
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->category = $request->category;
        $blog->detailed_info = $detailed_info;

        if ($request->hasFile('image')) {
            $image_file = $request->file('image');
            $image_name = time() . '.' . $image_file->getClientOriginalExtension();
            $image_path = $image_file->storeAs('images/blogs', $image_name, 'public');
            $blog->image = $image_path;
        }

        $blog->save();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog yazısı başarıyla eklendi.');
    }
    public function updateBlogPost(Request $request, BlogPost $blogPost)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'detailed_info' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $detailed_info = $request->detailed_info;

        $dom = new DOMDocument();
        $dom->loadHTML($detailed_info, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            $data = base64_decode(explode(',', explode(';', $img->getAttribute('src'))[1])[1]);
            $image_name = "/images/blogs/" . time() . $key . '.png';
            file_put_contents(public_path() . $image_name, $data);

            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }

        $detailed_info = $dom->saveHTML();

        $blogPost->title = $request->title;
        $blogPost->description = $request->description;
        $blogPost->category = $request->category;
        $blogPost->detailed_info = $detailed_info;

        if ($request->hasFile('image')) {
            if ($blogPost->image) {
                Storage::disk('public')->delete($blogPost->image);
            }
            $imagePath = $request->file('image')->store('images/blogs', 'public');
            $blogPost->image = $imagePath;
        }

        $blogPost->save();

        return redirect()->route('admin.blogs.index')->with('success', 'Tarif başarıyla güncellendi.');
    }
    public function editBlogPost($id)
    {
        $blog = BlogPost::findOrFail($id);
        return view('admin.blogs.edit', compact('blog'));
    }


    public function destroyBlogPost($blogPost_id)
    {
        // Haber kaydını bul ve sil
        $blogs = BlogPost::findOrFail($blogPost_id);
        $blogs->delete();
        return redirect()->route('admin.blogs.index')->with('success', 'Haber başarıyla silindi.');
    }

    //COMPANY INFO CONTROL
    public function companyInfoManagement()
    {
        // Firma hakkında bilgisi sayfası
        $infos = CompanyInfo::all();
        return view('admin.aboutUs.index', compact('infos'));
    }

    public function showAddInfoForm()
    {
        $infos = CompanyInfo::all();
        return view('admin.aboutUs.create', compact('infos'));
    }

    public function storeInfo(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'detailed_info' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $detailed_info = $request->detailed_info;

        $dom = new DOMDocument();
        $dom->loadHTML($detailed_info, 9);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            $data = base64_decode(explode(',', explode(';', $img->getAttribute('src'))[1])[1]);
            $image_name = "/images/infos" . time(). $key.'png';
            file_put_contents(public_path(). $image_name, $data);

            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }

        $detailed_info = $dom->saveHTML();


        $info = new CompanyInfo();
        $info->title = $request->title;
        $info->description = $request->description;
        $info->detailed_info = $detailed_info;
        $info->category = $request->category;

        if ($request->hasFile('image')) {
            $image_file = $request->file('image');
            $image_name = time() . '.' . $image_file->getClientOriginalExtension();
            $image_path = $image_file->storeAs('images/infos', $image_name, 'public');
            $info->image = $image_path;
        }

        $info->save();

        return redirect()->route('admin.aboutUs.index')->with('success', 'Sayfa başarıyla eklendi.');
    }

    public function updateInfo(Request $request, CompanyInfo $info)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'detailed_info' => 'required',
            'category' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $detailed_info = $request->detailed_info;

        $dom = new DOMDocument();
        $dom->loadHTML($detailed_info, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            $data = base64_decode(explode(',', explode(';', $img->getAttribute('src'))[1])[1]);
            $image_name = "/images/infos/" . time() . $key . '.png';
            file_put_contents(public_path() . $image_name, $data);

            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }

        $detailed_info = $dom->saveHTML();

        $info->title = $request->title;
        $info->description = $request->description;
        $info->category = $request->category;
        $info->detailed_info = $detailed_info;

        if ($request->hasFile('image')) {
            if ($info->image) {
                Storage::disk('public')->delete($info->image);
            }
            $imagePath = $request->file('image')->store('images/infos', 'public');
            $info->image = $imagePath;
        }

        $info->save();

        return redirect()->route('admin.aboutUs.index')->with('success', 'Tarif başarıyla güncellendi.');
    }

    public function editInfo($id)
    {
        $infos = CompanyInfo::findOrFail($id);
        return view('admin.aboutUs.edit', compact('infos'));
    }


    public function destroyInfo($info_id)
    {
        // Haber kaydını bul ve sil
        $infos = CompanyInfo::findOrFail($info_id);
        $infos->delete();
        return redirect()->route('admin.aboutUs.index')->with('success', 'Haber başarıyla silindi.');
    }





    //HUMAN RESOURCES CONTROL
    public function hr()
    {
        $hr = HR::all();
        // İnsan kaynakları yönetimi sayfası
        return view('admin.hr.index', compact('hr'));
    }

    public function showAddHRForm()
    {
        $hr = HR::all();
        return view('admin.hr.create', compact('hr'));
    }

    public function storeHR(Request $request)
    {
        $detailed_info = $request->detailed_info;

        $dom = new DOMDocument();
        $dom->loadHTML($detailed_info, 1);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            $data = base64_decode(explode(',', explode(';', $img->getAttribute('src'))[1])[1]);
            $image_name = "/images/hr/" . time(). $key.'png';
            file_put_contents(public_path(). $image_name, $data);

            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }

        $detailed_info = $dom->saveHTML();

        HR::create([
            'detailed_info' => $detailed_info,
        ]);

        return redirect()->route('admin.hr.index')->with('success', 'Sayfa başarıyla eklendi.');
    }

    public function updateHR(HRRequest $request, HR $hr)
    {
        $request->validate([
            'detailed_info' => 'required',

        ]);

        $detailed_info = $request->detailed_info;

        $dom = new DOMDocument();
        $dom->loadHTML($detailed_info, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            $data = base64_decode(explode(',', explode(';', $img->getAttribute('src'))[1])[1]);
            $image_name = "/images/hr/" . time() . $key . '.png';
            file_put_contents(public_path() . $image_name, $data);

            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }

        $detailed_info = $dom->saveHTML();

        $hr->title = $request->title;
        $hr->description = $request->description;
        $hr->category = $request->category;
        $hr->detailed_info = $detailed_info;

        if ($request->hasFile('image')) {
            if ($hr->image) {
                Storage::disk('public')->delete($hr->image);
            }
            $imagePath = $request->file('image')->store('images/hr', 'public');
            $hr->image = $imagePath;
        }

        $hr->save();
        return redirect()->route('admin.hr.index')->with('success', 'Tarif başarıyla güncellendi.');
    }

    public function editHR($id)
    {
        $hr = hr::findOrFail($id);
        return view('admin.hr.edit', compact('hr'));
    }

    public function deleteHR($hr_id)
{
    // İlgili insan kaynakları kaydını silme
    $hr = HR::findOrFail($hr_id);
    $hr->delete();

    return redirect()->route('admin.hr.index')->with('success', 'Sayfa başarıyla silindi.');
}


    //CONTACT CONTROL
    public function contact()
    {
        // Firma iletişim sayfası
        return view('admin.contact');
    }
}
