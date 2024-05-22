import ProfileImage from '../assets/Profile.png'
const Home = () => {
    return (
        <div className="border-b border-neutral-900 pb-4 lg:mb-35">
            <div className="flex flex-wrap">
                <div className="w-full lg:w-1/2">
                    <div className="flex flex-col items-center lg:items-start">
                        <h1 className='pb-16 text-6xl font-thin tracking-tight lg:text-8xl'> Mohammed Majidi</h1>
                        <h1 className="text-4xl lg:text-5xl font-bold text-neutral-100">Welcome To My <span className="text-cyan-500">Portfolio</span></h1>
                        <span className="bg-gradient-to-r from-blue-300 via-gray-400 to-purple-500 bg-clip-text text-4xl tracking-tight text-transparent mt-4">I am a full stack web developer</span>
                        <p className="text-lg lg:text-xl text-neutral-300 mt-2">with a passion for creating beautiful and functional websites. I have experience in both front-end and back-end development, and I am always looking for new challenges to help me grow as a developer.</p>
                    </div>
                </div>
                <div className="w-full lg:w-1/2 flex justify-center">
                    <div className="hidden lg:block w-80 h-80 rounded-full bg-gradient-to-r from-blue-300 via-gray-400 to-purple-500">
                    <img src={ProfileImage} alt="profile" className="rounded-full w-80 h-80 object-cover object-center" />
                    </div>
                </div>
            </div>
        </div>
    )
}

export default Home
