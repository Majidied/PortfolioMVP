import logo from '../assets/logo.png';
const Navbar = () => {
    return (
        <nav className="mb-20 flex items-center justify-between py-6">
            <div className="flex flex-shrink-0 items-center">
                <img src={logo} alt="logo" width={300} />
            </div>
            <div className="flex px-20 pb- pt-10">
                <a href="#Home" className="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-7 py-2 text-base font-medium">Home</a>
                <a href="#Skills" className="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-7 py-2 text-base font-medium">Skills</a>
                <a href="#Projects" className="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-7 py-2 text-base font-medium">Projects</a>
                <a href="#Contact" className="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-7 py-2 text-base font-medium">Contact</a>
            </div>
        </nav>
    );
};

export default Navbar;
