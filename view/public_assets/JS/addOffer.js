
const skillSelect = document.getElementById('skillSelect');
const skillsContainer = document.getElementById('skillsContainer');

skillSelect.addEventListener('change', function () {

    const skillId = this.value;
    const skillName = this.options[this.selectedIndex].text;

    if (!skillId) return;

    const input = document.createElement('input');
    input.type = 'hidden';
    input.name = 'skills[]';
    input.value = skillId;

    const tag = document.createElement('span');
    tag.textContent = skillName + ' × ';
    tag.style.margin = '5px';
    tag.style.background = '#121633';
    tag.style.color = 'white';
    tag.style.padding = '5px';
    tag.style.borderRadius = '10px';
    tag.style.cursor = 'pointer';

    tag.onclick = () => {
        input.remove();
        tag.remove();
    };

    skillsContainer.appendChild(tag);
    skillsContainer.appendChild(input);

    this.value = '';
});

