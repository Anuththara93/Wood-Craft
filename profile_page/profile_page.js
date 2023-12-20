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

    function showTab(tabId) {
        const tabTitles = document.querySelectorAll('.tab-title');
        tabTitles.forEach(title => {
            title.classList.remove('active');
        });

        const tabPanes = document.querySelectorAll('.tab-pane');
        tabPanes.forEach(pane => {
            pane.classList.remove('active');
        });

        const selectedTabTitle = document.querySelector(`.tab-title[data-tab="${tabId}"]`);
        const selectedTabPane = document.getElementById(tabId);

        selectedTabTitle.classList.add('active');
        selectedTabPane.classList.add('active');

        overviewTabTitle.classList.remove('active');
    }
});

  
  