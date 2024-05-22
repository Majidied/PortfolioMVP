import React from 'react';
import '../components/css/SkillsInfoCard.css'; // Include this only if there's still custom CSS
import PropTypes from 'prop-types';

const SkillsInfoCard = ({ heading, skills }) => {
    return (
        <div className="skills-info-card min-h-[15rem] w-full  rounded-lg p-5 m-5 border-2 border-[#6751b9] bg-[rgba(22,17,47,0.398)] backdrop-blur-lg transition-all duration-300 ease-in-out">
            <h6 className="font-medium py-2 px-8 bg-gradient-to-b from-[#ac96ff] to-[#7c5fe6] bg-clip-text text-transparent border-b-2 border-[#6751b9] text-2xl transition-color duration-300 ease-in-out">
                {heading}
            </h6>
            <div className='flex flex-wrap items-center justify-center gap-4 mt-4'>
                {skills.map((item, index) => (
                    <React.Fragment key={`skill_${index}`}>
                        <div className='flex flex-col items-center justify-center p-1'>
                            <div className='skill-item rounded-2xl border-4 border-neutral-800 p-4 w-[6.25rem] h-[6.25rem] flex items-center justify-center transition-transform duration-300 ease-in-out hover:transform hover:scale-105 hover:shadow-md'>
                                <div className='flex w-[6rem]'>
                                    <img src={item.iconUrl} alt={item.title} className="object-contain" />
                                </div>
                            </div>
                            <p className='text-center text-gray-500 dark:text-gray-400 mt-2'>{item.title}</p>
                        </div>
                    </React.Fragment>
                ))}
            </div>
        </div>
    );
};

SkillsInfoCard.propTypes = {
    heading: PropTypes.string,
    skills: PropTypes.array.isRequired,
};

export default SkillsInfoCard;
