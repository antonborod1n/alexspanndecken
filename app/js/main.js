document.addEventListener('DOMContentLoaded', function () {
  const reviewsSwiper = new Swiper('.reviews__slider', {
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      320: {
        slidesPerView: 1.2,
        spaceBetween: 50,
      },
      1400: {
        slidesPerView: 2,
        spaceBetween: 100,
      },
    },
  });
  const bannerSwiper = new Swiper('.banner__slider', {
    breakpoints: {
      320: {
        slidesPerView: 1.1,
        spaceBetween: 15,
      },
      1000: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
    },
  });
  const optionsSwiper = new Swiper('.options__swiper', {
    spaceBetween: 20,
    navigation: {
      nextEl: '.options__swiper-button-next',
      prevEl: '.options__swiper-button-prev',
    },
    breakpoints: {
      320: {
        slidesPerView: 1.1,
      },
      568: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 3,
      },
      1400: {
        slidesPerView: 4,
      },
      1700: {
        slidesPerView: 5,
      },
    },
  });
  const recommendSwiper = new Swiper('.recommend__swiper', {
    spaceBetween: 20,
    navigation: {
      nextEl: '.recommend__swiper-button-next',
      prevEl: '.recommend__swiper-button-prev',
    },
    breakpoints: {
      320: {
        slidesPerView: 1.1,
      },
      568: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 3,
      },
      1400: {
        slidesPerView: 4,
      },
      1700: {
        slidesPerView: 5,
      },
    },
  });
  const watchedSwiper = new Swiper('.watched__swiper', {
    spaceBetween: 20,
    navigation: {
      nextEl: '.watched__swiper-button-next',
      prevEl: '.watched__swiper-button-prev',
    },
    breakpoints: {
      320: {
        slidesPerView: 1.1,
      },
      568: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 3,
      },
      1400: {
        slidesPerView: 4,
      },
      1700: {
        slidesPerView: 5,
      },
    },
  });

  const swiperProductNarrow = new Swiper('.swiper-narrow', {
    freeMode: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
    breakpoints: {
      320: {
        slidesPerView: 2.1,
        loopedSlides: 2.1,
        spaceBetween: 10,
      },
      768: {
        slidesPerView: 3,
        loopedSlides: 3,
        spaceBetween: 20,
      },
    },
  });

  const swiperProductLarge = new Swiper('.swiper-large', {
    slidesPerView: 'auto',
    thumbs: {
      swiper: swiperProductNarrow,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });

  const burger = document.querySelector('.js-menu-btn');
  const menu = document.querySelector('.js-menu-list');

  burger.addEventListener('click', () => {
    menu.classList.toggle('active');
  });

  const controllBox = document.querySelector('.js-controll-box');
  const controllBtn = document.querySelector('.js-controll-btn');

  if (controllBtn) {
    controllBtn.addEventListener('click', function () {
      controllBox.classList.toggle('active');
      controllBtn.classList.toggle('active');
    });
  }
  /* tabs */
  function tabs(headerSelector, tabSelector, contentSelector, activeClass) {
    const header = document.querySelector(headerSelector),
      tab = document.querySelectorAll(tabSelector),
      content = document.querySelectorAll(contentSelector);

    function hideTabContent() {
      content.forEach((item) => {
        item.style.display = 'none';
      });

      tab.forEach((item) => {
        item.classList.remove(activeClass);
      });
    }

    function showTabContent(i = 0) {
      if (content[i] && tab[i]) {
        content[i].style.display = 'block';
        tab[i].classList.add(activeClass);
      }
    }

    if (tab.length > 0 && content.length > 0) {
      hideTabContent();
      showTabContent();

      if (header) {
        header.addEventListener('click', (e) => {
          const target = e.target;

          if (
            target &&
            (target.classList.contains(tabSelector.replace(/\./, '')) ||
              target.parentNode.classList.contains(tabSelector.replace(/\./, '')))
          ) {
            tab.forEach((item, i) => {
              if (target == item || target.parentNode == item) {
                hideTabContent();
                showTabContent(i);
              }
            });
          }
        });
      }
    }
  }
  tabs('.js-tabs-control', '.js-tabs-btn', '.js-content-items', 'active');

  /* filter */
  const selectedFilters = document.getElementById('selectedFilters');
  const filterSelects = document.querySelectorAll('.filter-select');
  const resetButton = document.getElementById('resetFilters');
  const sortButtons = document.querySelectorAll('.filter__sort-btn');
  const productList = document.getElementById('productList');
  const products = Array.from(productList.getElementsByClassName('product'));

  function updateFilters() {
    selectedFilters.innerHTML = '';
    let activeFilters = {};

    filterSelects.forEach((select) => {
      if (select.value) {
        activeFilters[select.id] = select.value;
        const filterItem = document.createElement('div');
        filterItem.className = 'filter__item';
        filterItem.textContent = `${select.value} ×`;
        filterItem.addEventListener('click', () => {
          select.value = '';
          updateFilters();
        });
        selectedFilters.appendChild(filterItem);
      }
    });

    filterProducts(activeFilters);
  }

  function filterProducts(filters) {
    products.forEach((product) => {
      let isVisible = true;
      for (let key in filters) {
        if (product.dataset[key] !== filters[key]) {
          isVisible = false;
          break;
        }
      }
      product.style.display = isVisible ? 'block' : 'none';
    });
  }

  filterSelects.forEach((select) => select.addEventListener('change', updateFilters));

  resetButton.addEventListener('click', () => {
    filterSelects.forEach((select) => (select.value = ''));
    updateFilters();
  });

  sortButtons.forEach((button) => {
    button.addEventListener('click', () => {
      const type = button.dataset.sort;
      products.sort((a, b) => {
        if (type === 'price') return a.dataset.price - b.dataset.price;
        if (type === 'availability')
          return b.dataset.availability.localeCompare(a.dataset.availability);
        if (type === 'date') return new Date(b.dataset.date) - new Date(a.dataset.date);
      });
      productList.innerHTML = '';
      products.forEach((product) => productList.appendChild(product));
    });
  });
});
