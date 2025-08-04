 const savedTheme = localStorage.getItem('theme');
  if (savedTheme === 'dark') {
    document.body.classList.add('dark-theme');
  }

  const toggleBtn = document.querySelector('.theme-toggle');

  toggleBtn.addEventListener('click', () => {
    document.body.classList.toggle('dark-theme');

    // Tema tercihini localStorage'a kaydet
    if (document.body.classList.contains('dark-theme')) {
      localStorage.setItem('theme', 'dark');
    } else {
      localStorage.setItem('theme', 'light');
    }
  });