import React from 'react';
import '../components/css/SkillsInfoCard.css';
import PropTypes from 'prop-types';

const SkillsInfoCard = ({ heading, skills }) => {
    return (
        <div className="skills-info-card">
            <h6>{heading}</h6>
            <div className='flex flex-wrap items-center justify-center gap-4'>
                {skills.map((item, index) => (
                    <React.Fragment key={`skill_${index}`}>
                        <div className='items-center justify-center p-1'>
                            <div className='skill-item rounded-2xl border-4 border-neutral-800 p-4 w-25 h-25 items-center justify-center'>
                                <div className='flex w-10'>
                                    <img src={item.iconUrl} alt={item.title} />
                                </div>
                            </div>
                                <p className=' text-center text-gray-500 dark:text-gray-400'>{item.title}</p>
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
