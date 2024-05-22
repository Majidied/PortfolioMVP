import { useState, useEffect } from 'react';
import ProfileImage from '../assets/Profile.png';
import SocielMedia from './SocielMedia';
import '../components/css/Home.css';

const Home = () => {
    const toRotate = ['Full stack developer', 'Software engineer', 'Desktop app developer', 'Computer science enthusiast'];

    const [textIndex, setTextIndex] = useState(0);
    const [displayText, setDisplayText] = useState('');
    const [charIndex, setCharIndex] = useState(0);

    useEffect(() => {
        const intervalId = setTimeout(() => {
            if (charIndex < toRotate[textIndex].length) {
                setDisplayText(prevText => prevText + toRotate[textIndex].charAt(charIndex));
                setCharIndex(prevIndex => prevIndex + 1);
            } else {
                setTimeout(() => {
                    setCharIndex(0);
                    setDisplayText('');
                    setTextIndex(prevIndex => (prevIndex + 1) % toRotate.length);
                }, 2000);
            }
        }, 150);

        return () => clearTimeout(intervalId);
    }, [charIndex, textIndex]);

    const scrollTo = (id) => {
        const element = document.getElementById(id);
        element.scrollIntoView({ behavior: "smooth" });
    }

    return (
        <div className="border-b border-neutral-900 pb-4 lg:mb-35 mt-10 pt-10" id='Home'>
            <div className="flex flex-wrap mt-10">
                <div className="w-full lg:w-1/2">
                    <div className="flex flex-col items-center lg:items-start">
                        <h1 className='pb-16 text-6xl font-thin tracking-tight lg:text-8xl'>Mohammed Majidi</h1>
                        <h1 className="text-4xl lg:text-5xl font-bold text-neutral-100">Welcome To My <span className="text-cyan-500">Portfolio</span></h1>
                        <span className="bg-gradient-to-r from-blue-300 via-gray-400 to-purple-500 bg-clip-text text-4xl tracking-tight text-transparent mt-4">
                        <span className="text-cyan-50">I&apos;m a </span> {displayText}
                        </span>
                        <p className="text-lg lg:text-xl text-neutral-300 mt-2">with a passion for creating beautiful and functional websites. I have experience in both front-end and back-end development, and I am always looking for new challenges to help me grow as a developer.</p>
                    </div>
                    <div className='flex p-2 mt-10'>
                        <SocielMedia />
                        <a
                            href="https://drive.usercontent.google.com/download?id=1Lho_uBt0Y9lcdYQbAViF54T7b0Qzf5KQ&export=download&authuser=0&confirm=t&uuid=e4662aba-1a78-4968-bd7d-923e77361417&at=APZUnTVae7aIw8kCYv5SAYiZj4Tc:1716369805100"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            <button className="cursor-pointer flex justify-between bg-gray-800 px-4 py-2 rounded-full text-white tracking-wider shadow-xl hover:bg-gray-900 hover:scale-105 duration-500 hover:ring-1 font-mono w-[180px]">
                                Download CV
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    strokeWidth="2"
                                    stroke="currentColor"
                                    className="w-5 h-5 animate-bounce"
                                >
                                    <path
                                        strokeLinecap="round"
                                        strokeLinejoin="round"
                                        d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3"
                                    />
                                </svg>
                            </button>
                        </a>
                    </div>
                </div>
                <div className="w-full lg:w-1/2 flex justify-center mt-10">
                    <div className="hidden lg:block w-80 h-80 rounded-full bg-gradient-to-r from-blue-300 via-gray-400 to-purple-500">
                        <img src={ProfileImage} alt="profile" className="rounded-full w-80 h-80 object-cover object-center" />
                    </div>
                </div>
            </div>
            <div className="flex justify-center mt-8">
                <button onClick={() => scrollTo('Skills')} className="bg-gradient-to-r from-blue-500 to-red-500 text-white px-4 py-2 text-xl rounded font-medium focus:ring ring-black ring-opacity-10 gradient element-to-rotate">Scroll</button>
            </div>
        </div>
    )
}

export default Home;
