<?php

namespace App\Http\Controllers;

use App\Jobs\NotificationJob;
use App\Models\Lecture;
use App\Models\Product;
use App\Models\SupportRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Show products page.
     *
     * @return mixed
     */
    public function showProductsPage()
    {
        $products = auth()->user()->getPaidProducts();
        return view('app.my-products', compact('products'));
    }

    /**
     * Show the product's page.
     *
     * @param string $product
     * @return mixed
     */
    public function showProductPage(string $product)
    {
        $product = Product::where('slug', $product)->first();
        if(!$product) abort(404);
        return view('app.my-product', compact('product'));
    }

    /**
     * Show the profile settings page.
     *
     * @return mixed
     */
    public function showProfilePage()
    {
        return view('app.user.profile');
    }

    /**
     * Show the support page.
     *
     * @return mixed
     */
    public function showSupportPage()
    {
        return view('app.support');
    }

    /**
     * Send the support message.
     *
     * @param Request $request
     * @return mixed
     */
    public function sendSupportMessage(Request $request)
    {
        $data = $request->only('name', 'email', 'message');
        SupportRequest::create($data);
        $data['userMessage'] = $request->message;
        NotificationJob::dispatch('emails.user_notification', $data, $request->email);
        NotificationJob::dispatch('emails.admin_notification', $data, 'manichevassvetlana@gmail.com');
        return redirect()->back()->with('status', 'Спасибо за обращение, ваше сообщение было успешно отправлено! Мы с вами скоро свяжемся.');
    }

    /**
     * Update the user profile information.
     *
     * @param Request $request
     * @return mixed
     */
    public function updateProfile(Request $request)
    {
        try{
            auth()->user()->updateProfile($request->all());
        } catch(\Exception $exception) {
            return redirect('/profile')->with('error', $exception->getMessage());
        }
        return redirect('/profile')->with('status', 'Ваша информация была успешно обновлена!');
    }

    /**
     * Show the lecture's page.
     *
     * @param string $product
     * @param string $lecture
     * @return mixed
     */
    public function showProductLecturePage(string $product, string $lecture)
    {
        $product = Product::where('slug', $product)->first();
        if(!$product) abort(404);
        $lecture = $product->lectures()->whereSlug($lecture)->first();
        if(!$lecture) abort(404);
        return view('app.my-product-lecture', compact('lecture'));
    }
}
