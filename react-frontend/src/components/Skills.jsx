import { useState } from "react";
import "../components/css/Skills.css";
import SkillCard from "./SkillCard";
import SkillsInfoCard from "./SkillsInfoCard";
import { skills } from "../utils/data";

const Skills = () => {
    const [selectedSkill, setSelectedSkill] = useState(skills[0]);

    const handleSelectedSkill = (skill) => {
        setSelectedSkill(skill);
    };

    return (
        <section className="skills-container">
            <h5>Technical Proficiency</h5>
            <div className="skills-content">
                <div className="skills">
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
                <div className="skills-info">
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
