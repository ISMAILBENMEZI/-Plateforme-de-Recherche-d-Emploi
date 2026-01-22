
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
    tag.classList.add('addNewTags')
    tag.textContent = skillName + ' × ';

    tag.onclick = () => {
        input.remove();
        tag.remove();
    };

    skillsContainer.appendChild(tag);
    skillsContainer.appendChild(input);

    this.value = '';
});

