// 
import './App.css'

function App() {

  return (
    <>
      <header>
        <nav className="navigation">
          <h2 className="paragraph">Home</h2>
          <h2 className="paragraph">About Us</h2>
          <h2 className="paragraph">Contact</h2>
        </nav>
      </header>
      <main>
        <div className="articles">
          <div className="sectionpart">
            <p>Welcome to our website! We’re glad you stopped by.</p>
            <p>Here you’ll find articles, resources, and updates on our work.</p>
            <p>Take a look around and explore what we have to share.</p>
          </div>
        </div>
      </main>
      <footer className="footerpage">
        <nav className="endnavigation">
          <p>&copy; 2025 Example Company</p>
          <p>Privacy Policy</p>
          <p>Terms of Service</p>
        </nav>
      </footer>
    </>
  )
}

export default App
