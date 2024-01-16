const container = document.querySelector('.container');
window.addEventListener('scroll', () => {
  const { scrollTop, clientHeight } = document.documentElement;
  const topContainer = container.getBoundingClientRect().top;
   if (scrollTop > (scrollTop + topContainer).toFixed() - 2 || topContainer < clientHeight - 200) {
    container.classList.add('active');
  }
});
