import '../components/css/SkillCard.css'; // Include this only if there's still custom CSS
import PropTypes from 'prop-types'; // To enable prop-types validation

const SkillCard = ({ title, iconUrl, isActive, onClick }) => {
  return (
    <div
      className={`skills-card ${isActive ? "active" : ""} relative rounded-lg border-2 border-[#6751b9] p-10 text-center bg-[rgba(22,17,47,0.398)] backdrop-blur-lg cursor-pointer transition-all duration-300 ease-in-out ${isActive ? "bg-gradient-to-b from-[#3e3074] to-[#5e38e7] hover: bg-indigo-600" : ""}`}
      onClick={onClick}
    >
      <div className="skill-icon w-16 h-16 flex justify-center items-center rounded-lg bg-[#2a2252] border-2 border-[#6852ba] absolute -top-4 -left-4 transition-all duration-300 ease-in-out">
        <img src={iconUrl} alt={title} className="w-10 h-auto object-contain" />
      </div>
      <span>{title}</span>
    </div>
  );
};

SkillCard.propTypes = {
  title: PropTypes.string.isRequired,
  iconUrl: PropTypes.string.isRequired,
  isActive: PropTypes.bool.isRequired,
  onClick: PropTypes.func.isRequired,
};

export default SkillCard;
