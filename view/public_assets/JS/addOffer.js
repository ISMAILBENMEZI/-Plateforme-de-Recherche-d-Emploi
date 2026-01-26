const skillSelect = document.getElementById('skillSelect');
const skillsContainer = document.getElementById('skillsContainer');

skillSelect.addEventListener('change', function () {
    const skillId = this.value;
    const skillName = this.options[this.selectedIndex].text;

    if (!skillId) return;
    if (skillsContainer.querySelector(`span[data-id="${skillId}"]`)) return;

    const input = document.createElement('input');
    input.type = 'hidden';
    input.name = 'skills[]';
    input.value = skillId;
    input.dataset.id = skillId;

    const tag = document.createElement('span');
    tag.classList.add('addNewTags');
    tag.dataset.id = skillId;
    tag.textContent = skillName + ' ×';

    skillsContainer.appendChild(input);
    skillsContainer.appendChild(tag);

    this.value = '';
});

skillsContainer.addEventListener("click", function (e) {
    const span = e.target.closest(".addNewTags");
    if (!span) return;

    const id = span.dataset.id;
    const input = skillsContainer.querySelector(
        `input[type="hidden"][data-id="${id}"]`
    );

    if (input) input.remove();
    span.remove();
});

document.addEventListener('DOMContentLoaded', () => {

    const jobSelect = document.getElementById('job_name');
    const skillSelect = document.getElementById('skillSelect');

    let categoriesData = [];

    fetch('api')
        .then(res => res.json())
        .then(categories => {
            categoriesData = categories;

            categories.forEach(cat => {
                const option = document.createElement('option');
                option.value = cat.name;
                option.textContent = cat.name;
                jobSelect.appendChild(option);
            });
        });

    jobSelect.addEventListener('change', () => {

        const categoryId = jobSelect.value;
        skillSelect.innerHTML = '<option value="">Select skill</option>';

        if (!categoryId) return;

        const category = categoriesData.find(c => c.id == categoryId);

        if (category && category.tags) {
            category.tags.forEach(tag => {
                const option = document.createElement('option');
                option.value = tag.id;
                option.textContent = tag.name;
                skillSelect.appendChild(option);
            });
        }
    });

});
