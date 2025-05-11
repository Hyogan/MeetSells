import React from 'react'

const AddedValue = () => {
  return (
    <>
        <section className="py-16 bg-gradient-to-br from-gray-50 via-white to-gray-100">
  <div className="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    <div className="text-center mb-12">
      <h2 className="text-3xl font-extrabold text-indigo-700 tracking-tight sm:text-4xl lg:text-5xl">
        Experience the Flow: Connect. Discuss. Order.
      </h2>
      <p className="mt-4 text-lg text-gray-600">
        See how MeetSells creates dynamic interactions between buyers and sellers, leading to successful transactions.
      </p>
    </div>

    <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
      {/* Step 1: Connect */}
      <div className="relative rounded-lg shadow-xl overflow-hidden group hover:shadow-2xl transition-shadow duration-300">
        <div className="absolute inset-0 bg-indigo-600 opacity-70 transform scale-105 group-hover:scale-100 transition-transform duration-300 blur-md"></div>
        <div className="relative p-8 text-center">
          <div className="w-16 h-16 rounded-full bg-indigo-200 text-indigo-700 flex items-center justify-center mx-auto mb-4 transform scale-110 group-hover:scale-100 transition-transform duration-300">
            <svg className="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M12 4.354l-2.894 5.788a6 6 0 105.788 0L12 4.354z" />
            </svg>
          </div>
          <h3 className="text-xl font-semibold text-white mb-2">Connect</h3>
          <p className="text-gray-200">Buyers discover a world of sellers and unique items through intuitive browsing and smart search.</p>
          <div className="absolute bottom-4 left-1/2 -translate-x-1/2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <svg className="w-6 h-6 text-indigo-200 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
            </svg>
          </div>
        </div>
      </div>

      {/* Step 2: Discuss */}
      <div className="relative rounded-lg shadow-xl overflow-hidden group hover:shadow-2xl transition-shadow duration-300">
        <div className="absolute inset-0 bg-teal-600 opacity-70 transform scale-105 group-hover:scale-100 transition-transform duration-300 blur-md"></div>
        <div className="relative p-8 text-center">
          <div className="w-16 h-16 rounded-full bg-teal-200 text-teal-700 flex items-center justify-center mx-auto mb-4 transform scale-110 group-hover:scale-100 transition-transform duration-300">
            <svg className="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
            </svg>
          </div>
          <h3 className="text-xl font-semibold text-white mb-2">Discuss</h3>
          <p className="text-gray-200">Engage in direct conversations with sellers to clarify details, negotiate, and build trust.</p>
          <div className="absolute bottom-4 left-1/2 -translate-x-1/2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <svg className="w-6 h-6 text-teal-200 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
            </svg>
          </div>
        </div>
      </div>

      {/* Step 3: Order */}
      <div className="relative rounded-lg shadow-xl overflow-hidden group hover:shadow-2xl transition-shadow duration-300">
        <div className="absolute inset-0 bg-yellow-600 opacity-70 transform scale-105 group-hover:scale-100 transition-transform duration-300 blur-md"></div>
        <div className="relative p-8 text-center">
          <div className="w-16 h-16 rounded-full bg-yellow-200 text-yellow-700 flex items-center justify-center mx-auto mb-4 transform scale-110 group-hover:scale-100 transition-transform duration-300">
            <svg className="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
          </div>
          <h3 className="text-xl font-semibold text-white mb-2">Order</h3>
          <p className="text-gray-200">Secure your desired items through our streamlined ordering process, ensuring a smooth transaction.</p>
          <div className="absolute bottom-4 left-1/2 -translate-x-1/2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <svg className="w-6 h-6 text-yellow-200 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
            </svg>
          </div>
        </div>
      </div>
    </div>

    <div className="mt-16 text-center">
      <p className="text-lg text-gray-600">
        Ready to experience the vibrant way to connect and transact?
        <a href="/explore" className="font-semibold text-indigo-700 hover:underline ml-2">Dive into MeetSells</a>
      </p>
    </div>
  </div>
</section>

    </>
  )
}

export default AddedValue ;
