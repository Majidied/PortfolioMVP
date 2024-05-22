import { useRef } from 'react';
import { projects } from '../utils/Project'; // Import named export with curly braces
import '../components/css/Projects.css';
import Slider from 'react-slick';
import 'slick-carousel/slick/slick.css';
import 'slick-carousel/slick/slick-theme.css';

const Projects = () => {
    const sliderRef = useRef();
    const settings = {
        dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 3000,

        responsive: [
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            }

        ]
    };
    return (
        <section className="project-container">
            <h5>Work Experience</h5>

            <div className="project-content">
                <Slider {...settings} ref={sliderRef}>
                    {projects.map((project, index) => (

                        <div className="project-card flex flex-wrap" key={index}>
                            <div className='w-full lg:w-1/2'>
                                <img src={project.image} alt={project.title} />

                            </div>
                            <div className="w-full lg:w-1/2">
                                <div className="project-header">
                                    <h6>{project.title}</h6>
                                    <p className='duration'>{project.duration}</p>
                                </div>
                                <div className="project-body">
                                    <p>{project.description}</p>
                                </div>
                            </div>
                        </div>
                    ))}
                </Slider>
            </div>
        </section>
    )
}

export default Projects;
