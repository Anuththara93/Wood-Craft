document.addEventListener('DOMContentLoaded', function () {
    const tabTitles = document.querySelectorAll('.tab-title');

    tabTitles.forEach(title => {
        title.addEventListener('click', function () {
            const tabId = this.getAttribute('data-tab');
            showTab(tabId);
        });
    });

    const overviewTabTitle = document.querySelector('.tab-title[data-tab="profile-overview"]');
    overviewTabTitle.classList.add('active');

    const saveChangesBtn = document.getElementById('saveChangesBtn');
    saveChangesBtn.addEventListener('click', function () {

        showTab('profile-overview');
    });

    function showTab(tabId) {
        const tabTitles = document.querySelectorAll('.tab-title');
        const tabPanes = document.querySelectorAll('.tab-pane');

        tabTitles.forEach(title => title.classList.remove('active'));
        tabPanes.forEach(pane => pane.classList.remove('active'));

        const selectedTabTitle = document.querySelector(`.tab-title[data-tab="${tabId}"]`);
        const selectedTabPane = document.getElementById(tabId);

        selectedTabTitle.classList.add('active');
        selectedTabPane.classList.add('active');

        if (tabId === 'profile-edit') {
            const profilePictureInput = document.getElementById('profilePicture');
            profilePictureInput.addEventListener('change', handleProfilePictureChange);
        }
    }
});

function handleProfilePictureChange(event) {
    const fileInput = event.target;
    const file = fileInput.files[0];

    if (file) {
        const profileImagePreview = document.querySelector('.profile-container img');
        const reader = new FileReader();

        reader.onload = function (e) {
            profileImagePreview.src = e.target.result;
        };

        reader.readAsDataURL(file);
    }
}

function displayImage(input) {
    const file = input.files[0];

    if (file) {
        const reader = new FileReader();

        reader.onload = function (e) {
            const imageElement = document.querySelector('.col-md-8 .col-lg-9 img');
            imageElement.src = e.target.result;
        };

        reader.readAsDataURL(file);
    }
}

function removeProfileImage() {
    const imageElement = document.querySelector('.col-md-8 .col-lg-9 img');
    imageElement.src = 'image/profile-img.png';
    document.getElementById('uploadInput').value = '';
}


  
  