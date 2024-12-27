<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{

    private $products = [
        ['id' => 1, 'name' => 'Minipie model',
        'description' => "อาหารขนาดจิ๋ว ใช้เล่นสมมติบทบาท เช่น การเปิดร้านอาหารจิ๋ว และใช้สำหรับตกแต่งหรือสะสม ", 'price' => 5,
        'images' => [
         'https://i.pinimg.com/736x/64/0b/8a/640b8a2ae23360d66717ce99181eee2c.jpg',
         'https://i.pinimg.com/736x/68/60/9e/68609ebefb5a14c97bf9b8ef682a76fa.jpg',
         'https://i.pinimg.com/736x/cf/5a/88/cf5a88059896b786f9765df892ca8c2a.jpg'
        ],'image' => 'https://i.pinimg.com/736x/64/0b/8a/640b8a2ae23360d66717ce99181eee2c.jpg' ],

        ['id' => 2, 'name' => 'Pie model',
        'description' => "อาหารขนาดจิ๋ว ใช้เล่นสมมติบทบาท เช่น การเปิดร้านอาหารจิ๋ว และใช้สำหรับตกแต่งหรือสะสม", 'price' => 25,
        'images' => [
         'https://i.pinimg.com/736x/c1/a7/8d/c1a78d67f81b3297a3efeaacb97b299c.jpg',
         'https://i.pinimg.com/736x/77/d3/b9/77d3b9b3b0f5652c810f30fa57e59b9b.jpg',
         'https://i.pinimg.com/736x/0f/f6/99/0ff6995c0a54ca77f293407d803629cf.jpg'
        ],'image' =>'https://i.pinimg.com/736x/c1/a7/8d/c1a78d67f81b3297a3efeaacb97b299c.jpg'],

        ['id' => 3, 'name' => 'Bread model',
        'description' => 'อาหารขนาดจิ๋ว ใช้เล่นสมมติบทบาท เช่น การเปิดร้านอาหารจิ๋ว และใช้สำหรับตกแต่งหรือสะสม', 'price' => 20,
        'images' => [
         'https://i.pinimg.com/736x/39/ab/64/39ab6471bd505dfc2409fc1fe91a3a32.jpg',
         'https://i.pinimg.com/736x/f2/c9/22/f2c922f7d8841073edb479feadb7d03f.jpg',
         'https://i.pinimg.com/736x/7b/11/c6/7b11c6590037a5fa09eec2b8a0ace5b2.jpg'
        ],'image' => 'https://i.pinimg.com/736x/39/ab/64/39ab6471bd505dfc2409fc1fe91a3a32.jpg'],

        ['id' => 4, 'name' => 'Orange cake model',
        'description' => 'อาหารขนาดจิ๋ว ใช้เล่นสมมติบทบาท เช่น การเปิดร้านอาหารจิ๋ว และใช้สำหรับตกแต่งหรือสะสม', 'price' => 25,
        'images' => [
         'https://i.pinimg.com/736x/78/64/31/786431b745d26eaea914f4c2804bd250.jpg',
         'https://i.pinimg.com/736x/3a/d8/8f/3ad88fc59e3bd383edaee7e99314fe95.jpg',
         'https://i.pinimg.com/736x/69/4d/90/694d9027f50483b7fb2b1ca5a15f8944.jpg'
        ],'image' => 'https://i.pinimg.com/736x/78/64/31/786431b745d26eaea914f4c2804bd250.jpg'],

        ['id' => 5, 'name' => 'Lemon cake and pie model',
        'description' => "อาหารขนาดจิ๋ว ใช้เล่นสมมติบทบาท เช่น การเปิดร้านอาหารจิ๋ว และใช้สำหรับตกแต่งหรือสะสม", 'price' => 30,
        'images' => [
         'https://i.pinimg.com/736x/b0/2d/35/b02d3558e91c81908b104d416f848e1f.jpg',
         'https://i.pinimg.com/736x/a7/d5/4f/a7d54fd78146272fe650466735997377.jpg'
        ],'image' => 'https://i.pinimg.com/736x/b0/2d/35/b02d3558e91c81908b104d416f848e1f.jpg'],

        ['id' => 6, 'name' => 'Cheese model',
        'description' => 'อาหารขนาดจิ๋ว ใช้เล่นสมมติบทบาท เช่น การเปิดร้านอาหารจิ๋ว และใช้สำหรับตกแต่งหรือสะสม', 'price' => 25,
        'images' => [
         'https://i.pinimg.com/736x/c9/04/94/c9049408b6f9d40bde048c730c8754b3.jpg',
         'https://i.pinimg.com/736x/3f/00/09/3f000941aa3c0193988e96ebf062e3f1.jpg',
         'https://i.pinimg.com/736x/a3/28/89/a32889453ea2118f6bd445dc162649ee.jpg'
        ],'image' => 'https://i.pinimg.com/736x/c9/04/94/c9049408b6f9d40bde048c730c8754b3.jpg'],

        ['id' => 7, 'name' => 'Pickled fruit and vegetable models',
        'description' => "อาหารขนาดจิ๋ว ใช้เล่นสมมติบทบาท เช่น การเปิดร้านอาหารจิ๋ว และใช้สำหรับตกแต่งหรือสะสม", 'price' => 15,
        'images' => [
         'https://i.pinimg.com/736x/4f/c6/3b/4fc63b3225596199c30e84e62aaec77a.jpg',
         'https://i.pinimg.com/736x/a6/76/d9/a676d9eefb9aaa638bcad34998c3fb69.jpg',
         'https://i.pinimg.com/736x/fc/09/08/fc090820e5c1c07a4805c9b9f37d6cd5.jpg'
        ],'image' => 'https://i.pinimg.com/736x/4f/c6/3b/4fc63b3225596199c30e84e62aaec77a.jpg'],

        ['id' => 8, 'name' => 'Donut model',
        'description' => 'อาหารขนาดจิ๋ว ใช้เล่นสมมติบทบาท เช่น การเปิดร้านอาหารจิ๋ว และใช้สำหรับตกแต่งหรือสะสม', 'price' => 5,
        'images' => [
         'https://i.pinimg.com/736x/5f/9a/06/5f9a06abe60cfe1b6f460d419a469b6f.jpg',
         'https://i.pinimg.com/736x/f6/ef/e1/f6efe1e6aa8a0d513cda7efedd2e2978.jpg',
         'https://i.pinimg.com/736x/01/59/de/0159de87c9ce90a6142e11bb35bc0d1b.jpg'
        ],'image' => 'https://i.pinimg.com/736x/5f/9a/06/5f9a06abe60cfe1b6f460d419a469b6f.jpg'],

        ['id' => 9, 'name' => 'Sandwich model',
        'description' => "อาหารขนาดจิ๋ว ใช้เล่นสมมติบทบาท เช่น การเปิดร้านอาหารจิ๋ว และใช้สำหรับตกแต่งหรือสะสม", 'price' => 15,
        'images' => [
         'https://i.pinimg.com/736x/9b/35/48/9b354821b76864500336163d6cc1a559.jpg',
         'https://i.pinimg.com/736x/11/92/cb/1192cb4a64b80ff09bf9ca402eb88355.jpg'
        ],'image' => 'https://i.pinimg.com/736x/9b/35/48/9b354821b76864500336163d6cc1a559.jpg'],

        ['id' => 10, 'name' => 'Japanese food model',
        'description' => 'อาหารขนาดจิ๋ว ใช้เล่นสมมติบทบาท เช่น การเปิดร้านอาหารจิ๋ว และใช้สำหรับตกแต่งหรือสะสม', 'price' => 30,
        'images' => [
         'https://i.pinimg.com/736x/49/75/5e/49755ec3e46af186d346280efcd60523.jpg',
         'https://i.pinimg.com/736x/a5/db/4f/a5db4f809c4ce99f751158c5226d36aa.jpg',
         'https://i.pinimg.com/736x/c6/02/a0/c602a05ad928b301e98b09e48eaed7b6.jpg'
        ],'image' => 'https://i.pinimg.com/736x/49/75/5e/49755ec3e46af186d346280efcd60523.jpg'],

        ['id' => 11, 'name' => 'Breakfast model',
        'description' => 'อาหารขนาดจิ๋ว ใช้เล่นสมมติบทบาท เช่น การเปิดร้านอาหารจิ๋ว และใช้สำหรับตกแต่งหรือสะสม', 'price' => 30,
        'images' => [
         'https://i.pinimg.com/736x/f1/9b/8f/f19b8f2e05eb439ef5866d88436d9e44.jpg',
         'https://i.pinimg.com/736x/78/70/ef/7870ef75f1759fa58351b23b6a1e3982.jpg'
        ],'image' => 'https://i.pinimg.com/736x/f1/9b/8f/f19b8f2e05eb439ef5866d88436d9e44.jpg'],

        ['id' => 12, 'name' => 'Fruit model',
        'description' => 'อาหารขนาดจิ๋ว ใช้เล่นสมมติบทบาท เช่น การเปิดร้านอาหารจิ๋ว และใช้สำหรับตกแต่งหรือสะสม', 'price' => 5,
        'images' => [
         'https://i.pinimg.com/736x/66/11/61/661161135c8a4b58cee1febb8558adde.jpg',
         'https://i.pinimg.com/736x/3f/0e/0b/3f0e0b0f0e28a39a5ae3dfb69f462269.jpg'
        ],'image' => 'https://i.pinimg.com/736x/66/11/61/661161135c8a4b58cee1febb8558adde.jpg'],

        ];
        

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Products/Index', ['products' => $this->products]);
        // ส่งข้อมูลไปที่ตัวแปร products ในไฟล์ Index.jsx
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {   
        $product = collect($this->products)->firstWhere('id', $id);

        if (!$product) {
            abort(404, 'Product not found');
        }
        return Inertia::render('Products/Show', ['product' => $product]);
        // ส่งข้อมูลไปที่ตัวแปร product ในไฟล์ Show.jsx
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
