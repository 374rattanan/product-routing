import { Link } from '@inertiajs/react';

export default function Index({ products }) {
  return (
      <div className="bg-amber-50 from-blue-50 to-blue-100 min-h-screen">
          {/* Navbar */}
          <nav className="bg-stone-500 text-white py-4 shadow-md">
              <div className="container mx-auto flex justify-between items-center px-4">
                  <h1 className="text-2xl font-bold">My Store</h1>
                  
              </div>
          </nav>

          <div className="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-15 lg:max-w-7xl lg:px-8">
              <h2 className="text-4xl font-extrabold tracking-tight text-yellow-700 text-center mb-10">
                  Products
              </h2>

              <div className="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 xl:gap-x-8">
                  {products.map((product) => (
                      <a
                          key={product.id}
                          href={`/products/${product.id}`}
                          className="group shadow-lg hover:shadow-xl transition-shadow duration-300 rounded-lg bg-white"
                      >
                          <img
                              src={product.image}
                              alt={product.name}
                              className="aspect-square w-full rounded-t-lg bg-gray-200 object-cover group-hover:opacity-90 xl:aspect-[7/8]"
                          />
                          <div className="p-4">
                              <h3 className="text-sm font-medium text-gray-700 group-hover:text-gray-900">
                                  {product.name}
                              </h3>
                              <p className="mt-2 text-lg font-semibold text-yellow-700">
                                  ฿{product.price}
                              </p>
                          </div>
                      </a>
                  ))}
              </div>
          </div>
      </div>
  );
}
