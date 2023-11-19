let areClipPathShapesSupported = function () {

  let base = 'clipPath',
  prefixes = ['webkit', 'moz', 'ms', 'o'],
  properties = [base],
  testElement = document.createElement('testelement'),
  attribute = 'polygon(50% 0%, 0% 100%, 100% 100%)';

  // Push the prefixed properties into the array of properties.
  for (let i = 0, l = prefixes.length; i < l; i++) {if (window.CP.shouldStopExecution(0)) break;
    let prefixedProperty = prefixes[i] + base.charAt(0).toUpperCase() + base.slice(1); // remember to capitalize!
    properties.push(prefixedProperty);
  }

  // Interate over the properties and see if they pass two tests.
  window.CP.exitedLoop(0);for (let i = 0, l = properties.length; i < l; i++) {if (window.CP.shouldStopExecution(1)) break;
    let property = properties[i];

    // First, they need to even support clip-path (IE <= 11 does not)...
    if (testElement.style[property] === '') {

      // Second, we need to see what happens when we try to create a CSS shape...
      testElement.style[property] = attribute;
      if (testElement.style[property] !== '') {
        return true;
      }
    }
  }window.CP.exitedLoop(1);

  return false;
};

jQuery(document).ready(function($) {
  let defaultSlickSpeed = 300;

  $('.views').slick({
      responsive: [{
          breakpoint: 768,
          settings: {
              vertical: true,
              fade: false,
          },
      }],
      speed: 500,
      fade: true,
      cssEase: 'linear'
  }).
  on('beforeChange', (evt, slick, currentSlide, nextSlide) => {
    let delta = Math.abs(currentSlide - nextSlide);
    if (delta === slick.slideCount - 1) {
      delta = 1;
    }
    // $('.views').slick('slickSetOption', 'speed', delta * defaultSlickSpeed);
  }).
  on('afterChange', (evt, slick, currentSlide) => {
    // $('.views').slick('slickSetOption', 'speed', defaultSlickSpeed);

    $('.timeline__list').find('.timeline__item--active').removeClass('timeline__item--active');
    $('.timeline__list').find(`.timeline__item:nth-child(${currentSlide + 1})`).addClass('timeline__item--active');
  });

  $('.timeline__link').on('click', evt => {
    evt.preventDefault();
    $('.timeline__item--active').removeClass('timeline__item--active');
    $(evt.currentTarget).parent().addClass('timeline__item--active');

    $('.views').slick('slickGoTo', $(evt.currentTarget).parent().prevAll('li').length);

  });

  let timelineOffset = $('.timeline').offset().left;
  let triangleWidth = $('.timeline__path__triangle--moving').outerWidth();

  $('.timeline').on('mousemove', evt => {
    let value = evt.pageX - timelineOffset - triangleWidth / 2;
    $('.timeline__path__triangle--moving').css({
      transform: `translateX(${value}px)` });

  });

  if (!areClipPathShapesSupported()) {
    $('body').addClass('no-clippath');
  } else {
    $('body').addClass('clippath');
  }

});
