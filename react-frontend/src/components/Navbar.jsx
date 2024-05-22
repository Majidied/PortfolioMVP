import logo from '../assets/logo.png';

const Navbar = () => {
    return (
        <nav className="fixed top-0 left-0 right-0 z-10 bg-gray-900 flex items-center justify-between py-6 px-8 max-h-10">
            <div className="flex items-center mt-2">
                <img src={logo} alt="logo" width={150} />
            </div>
            <div className="flex">
                <a href="#Home" className="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-base font-medium">Home</a>
                <a href="#Skills" className="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-base font-medium">Skills</a>
                <a href="#Projects" className="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-base font-medium">Projects</a>
                <a href="#Contact" className="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-base font-medium">Contact</a>
            </div>
        </nav>
    );
};

export default Navbar;
