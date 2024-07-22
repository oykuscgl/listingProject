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
use App\Models\HumanResource;
use DOMDocument;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\RecipeRequest;
use App\Http\Requests\NewsPostRequest;
use App\Http\Requests\ServiceRequest;
use App\Http\Requests\InfoRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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

        Product::create([
            'name' => $request->name,
            'description'=> $request->description,
            'category'=> $request->category,
            'detailed_description' => $detailed_description,
            'stock' => $request->stock,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'shelf_life' => $request->shelf_life,
            'product_code' => $request->product_code,
            'pallet' => $request->pallet,
            'packaging' => $request->packaging,
            'image'=> $request->image,
            'specialCategory'=> $request->specialCategory,
        ]);

        return redirect()->route('admin.products.index')->with('success', 'Ürün başarıyla eklendi.');
    }

    public function showEditProductForm(Product $product)
    {
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function updateProduct(ProductRequest $request, Product $product)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $data['image'] = $request->file('image')->store('images', 'public');
        }

        $product->update($data);
        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully');
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

    /*
    public function createRecipe()
    {
        return view('admin.recipes.create');
    }*/

    public function storeRecipe(Request $request)
    {
        $detailed_info = $request->detailed_info;

        $dom = new DOMDocument();
        $dom->loadHTML($detailed_info, 9);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            $data = base64_decode(explode(',', explode(';', $img->getAttribute('src'))[1])[1]);
            $image_name = "/images/recipe/" . time(). $key.'png';
            file_put_contents(public_path(). $image_name, $data);

            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }

        $detailed_info = $dom->saveHTML();

        Recipe::create([
            'detailed_info' => $detailed_info,
        ]);

        return redirect()->route('admin.recipes.index')->with('success', 'Tarif başarıyla eklendi.');
    }

    public function showEditRecipeForm(Recipe $recipe)
    {
        $categories = Category::all();
        return view('admin.recipes.edit', compact('recipe', 'categories'));
    }
    public function updateRecipe(RecipeRequest $request, Recipe $recipe)
    {
        $recipe->update($request->validated());
        return redirect()->route('admin.recipes.index')->with('success', 'Tarif başarıyla güncellendi.');
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

    public function storeNews(NewsPostRequest $request)
    {
        News::create($request->validated());
        return redirect()->route('admin.news.index')->with('success', 'Tarif başarıyla eklendi.');
    }

    public function editNews($id)
    {
        $new = News::findOrFail($id);
        return view('admin.news.edit', compact('new'));
    }

    public function updateNews(NewsPostRequest $request, News $new)
    {
        $new->update($request->validated());
        return redirect()->route('admin.news.index')->with('success', 'Tarif başarıyla güncellendi.');
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

    public function createServices()
    {
        return view('admin.services.create');
    }

    public function storeServices(Request $request)
    {
        $detailed_info = $request->detailed_info;

        $dom = new DOMDocument();
        $dom->loadHTML($detailed_info, 9);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            $data = base64_decode(explode(',', explode(';', $img->getAttribute('src'))[1])[1]);
            $image_name = "/images/recipe/" . time(). $key.'png';
            file_put_contents(public_path(). $image_name, $data);

            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }

        $detailed_info = $dom->saveHTML();

        Service::create([
            'title'=> $request->title,
            'description'=> $request->description,
            'detailed_info' => $detailed_info,
            'image' => $request->image,
        ]);

        return redirect()->route('admin.services.index')->with('success', 'Tarif başarıyla eklendi.');
    }

    public function editServices($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.services.edit', compact('service'));
    }

    public function updateServices(ServiceRequest $request, Service $new)
    {
        $new->update($request->validated());
        return redirect()->route('admin.services.index')->with('success', 'Tarif başarıyla güncellendi.');
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

    public function storeResearch(ConsumerResearchRequest $request)
    {
        ConsumerResearch::create($request->validated());
        return redirect()->route('admin.consumerResearches.index')->with('success', 'Tarif başarıyla eklendi.');
    }

    public function editResearch($id)
    {
        $research = ConsumerResearch::findOrFail($id);
        return view('admin.consumerResearches.edit', compact('research'));
    }

    public function updateResearch(ConsumerResearchRequest $request, ConsumerResearch $research)
    {
        $research->update($request->validated());
        return redirect()->route('admin.consumerResearches.index')->with('success', 'Tarif başarıyla güncellendi.');
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

    public function createBlogPost()
    {
        return view('admin.blogs.create');
    }

    public function storeBlogPost(Request $request)
    {
        $detailed_info = $request->detailed_info;

        $dom = new DOMDocument();
        $dom->loadHTML($detailed_info, 9);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            $data = base64_decode(explode(',', explode(';', $img->getAttribute('src'))[1])[1]);
            $image_name = "/images/blog/" . time(). $key.'png';
            file_put_contents(public_path(). $image_name, $data);

            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }

        $detailed_info = $dom->saveHTML();

        BlogPost::create([
            'title'=> $request->title,
            'description'=> $request->description,
            'category'=> $request->category,
            'detailed_info' => $detailed_info,
        ]);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog yazısı başarıyla eklendi.');
    }

    public function editBlogPost($id)
    {
        $blog = BlogPost::findOrFail($id);
        return view('admin.blogs.edit', compact('blog'));
    }

    public function updateBlogPost(BlogPostRequest $request, BlogPost $blogPost)
    {
        $blogPost->update($request->validated());
        return redirect()->route('admin.blogs.index')->with('success', 'Tarif başarıyla güncellendi.');

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

    public function createInfo()
    {
        return view('admin.aboutUs.create');
    }

    public function storeInfo(InfoRequest $request)
    {
        CompanyInfo::create($request->validated());
        return redirect()->route('admin.aboutUs.index')->with('success', 'Tarif başarıyla eklendi.');
    }

    public function editInfo($id)
    {
        $infos = CompanyInfo::findOrFail($id);
        return view('admin.aboutUs.edit', compact('info'));
    }

    public function updateInfo(InfoRequest $request, CompanyInfo $info)
    {
        $info->update($request->validated());
        return redirect()->route('admin.aboutUs.index')->with('success', 'Tarif başarıyla güncellendi.');
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
        // İnsan kaynakları yönetimi sayfası
        return view('admin.hr');
    }

    public function hrEdit(Request $request)
    {
        $detailed_info = $request->detailed_info;

        $dom = new DOMDocument();
        $dom->loadHTML($detailed_info, 9);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            $data = base64_decode(explode(',', explode(';', $img->getAttribute('src'))[1])[1]);
            $image_name = "/images/hr/" . time(). $key.'png';
            file_put_contents(public_path(). $image_name, $data);

            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }

        $detailed_info = $dom->saveHTML();

        Recipe::create([
            'detailed_info' => $detailed_info,
        ]);

        return redirect()->route('admin.recipes.index')->with('success', 'Tarif başarıyla eklendi.');
    }


    //CONTACT CONTROL
    public function contact()
    {
        // Firma iletişim sayfası
        return view('admin.contact');
    }
}
