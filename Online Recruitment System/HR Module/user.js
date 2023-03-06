  const manageAccountsIcon = document.querySelector('#manage-accounts-icon');
  const userAccountInterface = document.querySelector('.user-account-interface');

  manageAccountsIcon.addEventListener('click', function() {
    userAccountInterface.style.display = (userAccountInterface.style.display === 'none') ? 'block' : 'none';
  });


