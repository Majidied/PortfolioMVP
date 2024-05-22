import { useState } from "react";
import "../components/css/Skills.css";
import SkillCard from "./SkillCard";
import SkillsInfoCard from "./SkillsInfoCard";
import { skills } from "../utils/data";


const Skills = () => {
    const [selectedSkill, setSelectedSkill] = useState(skills[0]);
    const [isVisible, setIsVisible] = useState(true); // State to control visibility of SkillsInfoCard

    const handleSelectedSkill = (skill) => {
        setIsVisible(false); // Hide SkillsInfoCard before switching
        setTimeout(() => {
            setSelectedSkill(skill);
            setIsVisible(true); // Show SkillsInfoCard after switching
        }, 300); // Adjust delay to match transition duration in CSS
    };

    return (
        <section className="skills-container" id="Skills">
            <h5>Technical Proficiency</h5>
            <div className="skills-content">
                <div className="skills mt-6">
                    {skills.map((skill, index) => (
                        <SkillCard
                            key={index}
                            title={skill.title}
                            iconUrl={skill.iconUrl}
                            isActive={selectedSkill.title === skill.title}
                            onClick={() => handleSelectedSkill(skill)}
                        />
                    ))}
                </div>
                <div className={`skills-info ${isVisible ? "opacity-100 translate-y-0" : "opacity-0 -translate-y-5"} transition-opacity transition-transform duration-300 ease-in-out`}>
                    <SkillsInfoCard
                        heading={selectedSkill.title}
                        skills={selectedSkill.skills}
                    />
                </div>
            </div>
        </section>
    );
};

export default Skills;
