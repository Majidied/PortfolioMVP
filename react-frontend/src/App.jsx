import Navbar from "./components/Navbar";
import Home from "./components/Home";
import Skills from "./components/Skills";
import Projects from "./components/Projects";
function App() {
    return (
        <div className="overflow-x-hiden text-neutral-300 antialiased selection:bg-cyan-300 selection:text-cyan-900 ">
            <div className="fixed top-0 -z-10 h-full w-full">
            <div className="absolute top-0 z-[-2] h-screen w-screen bg-neutral-950 bg-[radial-gradient(ellipse_80%_80%_at_50%_-20%,rgba(120,119,198,0.3),rgba(255,255,255,0))]"></div>
            </div>
            <Navbar />
            <div className="container mx-auto px-8">
            <Home />
            <Skills />
            <Projects />
            </div>
        </div>
    );
}

export default App;
