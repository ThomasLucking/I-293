
import './App.css'

function App() {

  return (
    <>
      <header class="bg-white shadow-sm border-b border-gray-200">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="flex justify-between items-center h-16">
            <div class="flex space-x-8">
              <h2 class="text-lg font-semibold text-gray-900 hover:text-blue-600 cursor-pointer transition-colors duration-200">Home</h2>
              <h2 class="text-lg font-semibold text-gray-900 hover:text-blue-600 cursor-pointer transition-colors duration-200">About Us</h2>
              <h2 class="text-lg font-semibold text-gray-900 hover:text-blue-600 cursor-pointer transition-colors duration-200">Contact</h2>
            </div>
          </div>
        </nav>
      </header>

      <main class="flex-grow">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
          <div class="bg-white rounded-lg shadow-md p-8">
            <div class="space-y-6">
              <p class="text-xl text-gray-700 leading-relaxed">Welcome to our website! We're glad you stopped by.</p>
              <p class="text-lg text-gray-600 leading-relaxed">Here you'll find articles, resources, and updates on our work.</p>
              <p class="text-lg text-gray-600 leading-relaxed">Take a look around and explore what we have to share.</p>
            </div>
          </div>
        </div>
      </main>

      <footer class="bg-gray-900 text-white">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
          <div class="flex flex-col sm:flex-row justify-between items-center space-y-4 sm:space-y-0">
            <p class="text-sm text-gray-300">&copy; 2025 Example Company</p>
            <div class="flex space-x-6">
              <p class="text-sm text-gray-300 hover:text-white cursor-pointer transition-colors duration-200">Privacy Policy</p>
              <p class="text-sm text-gray-300 hover:text-white cursor-pointer transition-colors duration-200">Terms of Service</p>
            </div>
          </div>
        </nav>
      </footer>
    </>
  )
}

export default App
