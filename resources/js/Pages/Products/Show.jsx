import { useState } from "react";
import { Link } from "@inertiajs/react";

export default function Show({ product }) {
  const [currentImageIndex, setCurrentImageIndex] = useState(0);

  const handlePrevious = () => {
    setCurrentImageIndex(
      (prevIndex) => (prevIndex === 0 ? product.images.length - 1 : prevIndex - 1)
    );
  };

  const handleNext = () => {
    setCurrentImageIndex(
      (prevIndex) => (prevIndex === product.images.length - 1 ? 0 : prevIndex + 1)
    );
  };

  return (
    <div className="bg-amber-50 min-h-screen">
      {/* Navbar */}
      <nav className="bg-stone-500 text-white py-4 shadow-md">
        <div className="container mx-auto flex justify-between items-center px-4">
          <h1 className="text-2xl font-bold">My Store</h1>
          <div className="flex space-x-4">
            <Link href="/products" className="hover:text-yellow-500">Products</Link>
          </div>
        </div>
      </nav>

      <div className="pt-6">
        {/* Added Header */}
        <div className="text-center sm:py-4">
          <h1 className="text-4xl font-extrabold text-yellow-700">Product Details</h1>
        </div>

        {/* Two-column layout */}
        <div className="mx-auto mt-6 max-w-7xl grid grid-cols-1 lg:grid-cols-2 gap-8 px-4 sm:px-6 lg:px-8">
          {/* Left column - Product images with carousel */}
          <div className="flex flex-col items-center">
            <div className="relative w-full max-w-md">
              {/* Main Image */}
              <img
                src={product.images[currentImageIndex]}
                className="rounded-lg object-cover h-[400px] w-[500px]"
                alt={`${product.name} - image ${currentImageIndex + 1}`}
              />

              {/* Navigation Buttons */}
              <button
                onClick={handlePrevious}
                className="absolute left-0 top-1/2 transform -translate-y-1/2 bg-stone-500 p-2 rounded-full shadow-lg hover:bg-stone-300"
              >
                ❮
              </button>
              <button
                onClick={handleNext}
                className="absolute right-0 top-1/2 transform -translate-y-1/2 bg-stone-500 p-2 rounded-full shadow-lg hover:bg-stone-300"
              >
                ❯
              </button>
            </div>

            {/* Thumbnail Images */}
            <div className="flex gap-2 mt-4">
              {product.images.map((image, index) => (
                <img
                  key={index}
                  src={image}
                  alt={`Thumbnail ${index + 1}`}
                  onClick={() => setCurrentImageIndex(index)}
                  className={`h-16 w-16 rounded-lg object-cover cursor-pointer ${currentImageIndex === index
                    ? "ring-2 ring-stone-500"
                    : "ring-1 ring-stone-500"
                    }`}
                />
              ))}
            </div>
          </div>

          {/* Right column - Product info */}
          <div className="flex flex-col justify-center">
            <div>
              <h1 className="text-2xl font-bold tracking-tight text-gray-600 sm:text-3xl">
                {product.name}
              </h1>
              <p className="mt-4 text-base text-gray-700">{product.description}</p>
            </div>

            <div className="mt-6">
              <p className="text-2xl font-bold tracking-tight text-yellow-700">฿{product.price}</p>

              <div className="mt-6">
                <Link
                  href="/products"
                  className="inline-block mt-4 px-6 py-3 text-sm font-medium text-white bg-stone-500 rounded-full shadow-md hover:shadow-lg hover:from-yellow-600 hover:to-yellow-800 transition-all duration-300"                >
                  Back to All Products
                </Link>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  );
}
