@extends('layouts.main')

@section('title', $item->name)

@section('content')
    <main class="main">
        <section class="top">
            <div class="top__container" style="background-image: url('/images/top-bg.jpg');">
                <div class="container">
                    <h2 class="top__title title">PRODUCT</h2>
                    <div class="breadcrumbs">
                        <ul class="breadcrumbs__list">
                            <li class="breadcrumbs__item">
                                <a class="breadcrumbs__link" href="index.html">Home</a>
                            </li>
                            <li class="breadcrumbs__item">
                                <a class="breadcrumbs__link" href="#">{{$item->name}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="product-page">
            <div class="container">
                <div class="product-one">
                    <div class="product-one__inner">
                        <div class="product-one__slide product-slide">
                            <div class="product-slide__thumb">
                                <div class="product-slide__thumb-item">
                                    <img src="/images/product/item/1.jpg" alt="">
                                </div>
                                <div class="product-slide__thumb-item">
                                    <img src="/images/product/item/1.jpg" alt="">
                                </div>
                                <div class="product-slide__thumb-item">
                                    <img src="/images/product/item/1.jpg" alt="">
                                </div>
                                <div class="product-slide__thumb-item">
                                    <img src="/images/product/item/1.jpg" alt="">
                                </div>
                            </div>
                            <div class="product-slide__big">
                                <div class="product-slide__big-item">
                                    <img src="/images/product/item/1.jpg" alt="">
                                </div>
                                <div class="product-slide__big-item">
                                    <img src="/images/product/item/1.jpg" alt="">
                                </div>
                                <div class="product-slide__big-item">
                                    <img src="/images/product/item/1.jpg" alt="">
                                </div>
                                <div class="product-slide__big-item">
                                    <img src="/images/product/item/1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="product-one__content">
                            <h2 class="product-one__title">
                                Emboossed Packet Backpack
                            </h2>
                            <div class="product-one__box">
                                <div class="product-one__price">
                                    <div class="product-one__price-new">$19.00</div>
                                    <div class="product-one__price-old">(29.00)</div>
                                </div>
                                <div class="product-one__item-star">
                                    <div class="star" data-rateyo-rating="4.0"></div>
                                    <span>(22)</span>
                                </div>
                            </div>
                            <p class="product-one__item-text">
                                <span>Review:</span>
                                Lorem ipsum dolor sit amet, consectetur adipscg elit, sed do eiusmod tempor incididunt ut laborea et dolore magna alqua.
                                Quis ipsum suspendssem moa ultrices gravida.
                            </p>
                            <form class="product-one__item-form product-filter" action="#">
                                <div class="product-filter__color">
                                    <div class="product-filter__color-title">
                                        Color:
                                    </div>
                                    <label>
                                        <input class="product-filter__color-input" type="radio" name="color">
                                        <span class="product-filter__color-checkbox">
                          <span style="background-color: #f49ac1;"></span>
                        </span>
                                    </label>
                                    <label>
                                        <input class="product-filter__color-input" type="radio" name="color">
                                        <span class="product-filter__color-checkbox">
                          <span style="background-color: #e5e4e1;"></span>
                        </span>
                                    </label>
                                    <label>
                                        <input class="product-filter__color-input" type="radio" name="color">
                                        <span class="product-filter__color-checkbox">
                          <span style="background-color: #ffbc41;"></span>
                        </span>
                                    </label>
                                    <label>
                                        <input class="product-filter__color-input" type="radio" name="color">
                                        <span class="product-filter__color-checkbox">
                          <span style="background-color: #b370ff;"></span>
                        </span>
                                    </label>
                                    <label>
                                        <input class="product-filter__color-input" type="radio" name="color">
                                        <span class="product-filter__color-checkbox">
                          <span style="background-color: #6fdf9e;"></span>
                        </span>
                                    </label>
                                    <label>
                                        <input class="product-filter__color-input" type="radio" name="color">
                                        <span class="product-filter__color-checkbox">
                          <span style="background-color: #ff6060;"></span>
                        </span>
                                    </label>
                                </div>
                                <div class="product-filter__size">
                                    <div class="product-filter__size-title">
                                        Size:
                                    </div>
                                    <label>
                                        <input class="product-filter__size-input" type="radio" name="size">
                                        <span class="product-filter__size-checkbox">S</span>
                                    </label>
                                    <label>
                                        <input class="product-filter__size-input" type="radio" name="size">
                                        <span class="product-filter__size-checkbox">M</span>
                                    </label>
                                    <label>
                                        <input class="product-filter__size-input" type="radio" name="size">
                                        <span class="product-filter__size-checkbox">L</span>
                                    </label>
                                    <label>
                                        <input class="product-filter__size-input" type="radio" name="size">
                                        <span class="product-filter__size-checkbox">XS</span>
                                    </label>
                                    <label>
                                        <input class="product-filter__size-input" type="radio" name="size">
                                        <span class="product-filter__size-checkbox">XL</span>
                                    </label>
                                    <label>
                                        <input class="product-filter__size-input" type="radio" name="size">
                                        <span class="product-filter__size-checkbox">XXL</span>
                                    </label>
                                </div>
                                <div class="product-one__item-info product-info">
                                    <ul class="product-info__list">
                                        <li class="product-info__item">
                                            <div class="product-info__title">
                                                SKU
                                            </div>
                                            <div class="product-info__text">
                                                11FSE7739
                                            </div>
                                        </li>
                                        <li class="product-info__item">
                                            <div class="product-info__title">
                                                Categories
                                            </div>
                                            <div class="product-info__text">
                                                Woman
                                            </div>
                                        </li>
                                        <li class="product-info__item">
                                            <div class="product-info__title">
                                                Tags
                                            </div>
                                            <div class="product-info__text">
                                                <a href="#">Fashion</a>
                                                |
                                                <a href="#">Woman</a>
                                                |
                                                <a href="#">Sale</a>
                                            </div>
                                        </li>
                                        <li class="product-info__item">
                                            <div class="product-info__title">
                                                Share
                                            </div>
                                            <div class="product-info__text">
                                                <a class="product-info__link" href="#">
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        width="11px"
                                                        height="18px"
                                                        viewbox="0 0 11 17"
                                                        version="1.1">
                                                        <g>
                                                            <path d="M 9.59375 9.5625 L 10.085938 6.484375 L 7.027344 6.484375 L 7.027344 4.488281 C 7.027344 3.648438 7.453125 2.828125
                                  8.824219 2.828125 L 10.214844 2.828125 L 10.214844 0.207031 C 10.214844 0.207031 8.953125 0 7.746094 0 C 5.230469 0
                                  3.585938 1.472656 3.585938 4.140625 L 3.585938 6.484375 L 0.785156 6.484375 L 0.785156 9.5625 L 3.585938 9.5625 L
                                  3.585938 17 L 7.027344 17 L 7.027344 9.5625 Z M 9.59375 9.5625 "/>
                                                        </g>
                                                    </svg>
                                                </a>
                                                <a class="product-info__link" href="#">
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        width="15px"
                                                        height="15px"
                                                        viewbox="0 0 15 15"
                                                        version="1.1">
                                                        <g>
                                                            <path d="M 13.457031 4.445312 C 13.46875 4.578125 13.46875 4.710938 13.46875 4.84375 C 13.46875 8.910156 10.375 13.589844
                                  4.722656 13.589844 C 2.980469 13.589844 1.359375 13.085938 0 12.210938 C 0.246094 12.238281 0.484375 12.25 0.742188 12.25
                                  C 2.179688 12.25 3.503906 11.765625 4.558594 10.9375 C 3.207031 10.90625 2.074219 10.023438 1.683594 8.804688 C 1.875
                                  8.832031 2.066406 8.851562 2.265625 8.851562 C 2.542969 8.851562 2.816406 8.8125 3.074219 8.746094 C 1.664062 8.460938
                                  0.609375 7.222656 0.609375 5.730469 L 0.609375 5.691406 C 1.019531 5.921875 1.496094 6.0625 2 6.082031 C 1.171875 5.53125
                                  0.628906 4.585938 0.628906 3.523438 C 0.628906 2.949219 0.78125 2.425781 1.046875 1.96875 C 2.558594 3.835938 4.835938
                                  5.054688 7.386719 5.1875 C 7.339844 4.957031 7.308594 4.722656 7.308594 4.484375 C 7.308594 2.789062 8.679688 1.410156
                                  10.382812 1.410156 C 11.269531 1.410156 12.070312 1.78125 12.628906 2.378906 C 13.324219 2.246094 13.992188 1.988281
                                  14.582031 1.636719 C 14.351562 2.351562 13.867188 2.949219 13.230469 3.332031 C 13.847656 3.265625 14.449219 3.09375 15
                                  2.855469 C 14.582031 3.464844 14.058594 4.007812 13.457031 4.445312 Z M 13.457031 4.445312 "/>
                                                        </g>
                                                    </svg>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <input class="product-one__num" type="number" value="1" min="1">
                                <button class="product-one__btn" type="submit">Add to cart</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="product-tabs">
                    <div class="product-tabs__top">
                        <a class="product-tabs__top-item" href="#tab-1">Description</a>
                        <a class="product-tabs__top-item" href="#tab-2">Additional information</a>
                        <a class="product-tabs__top-item product-tabs__top-item--active" href="#tab-3">Reviews</a>
                    </div>
                    <div class="product-tabs__content">
                        <div class="product-tabs__content-item" id="tab-1">
                            content 1
                        </div>
                        <div class="product-tabs__content-item" id="tab-2">
                            content 2
                        </div>
                        <div class="product-tabs__content-item product-tabs__content-item--active" id="tab-3">
                            <div class="comments">
                                <img src="images/avatar/1.jpg" alt="avatar" class="comments__img">
                                <div class="comments__content">
                                    <div class="comments__content-top">
                                        <p class="comments__content-name">Michle Jhon</p>
                                        |
                                        <p class="comments__content-date">2 days ago</p>
                                        <div class="star comments__content-star" data-rateyo-rating="4"></div>
                                    </div>
                                    <p class="comments__content-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                        aliqua. Qus ipsum speissei ultrices gravida. Risus commodo viverra maeenas accumsan lacus vel facilisis.
                                    </p>
                                    <a class="comments__content-reply" href="#">Reply</a>
                                </div>
                            </div>
                            <div class="comments">
                                <img src="images/avatar/2.jpg" alt="avatar" class="comments__img">
                                <div class="comments__content">
                                    <div class="comments__content-top">
                                        <p class="comments__content-name">Michle Jhon</p>
                                        |
                                        <p class="comments__content-date">2 days ago</p>
                                        <div class="star comments__content-star" data-rateyo-rating="4"></div>
                                    </div>
                                    <p class="comments__content-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                        aliqua. Qus ipsum speissei ultrices gravida. Risus commodo viverra maeenas accumsan lacus vel facilisis.
                                    </p>
                                    <a class="comments__content-reply" href="#">Reply</a>
                                </div>
                            </div>
                            <div class="comments">
                                <img src="images/avatar/3.jpg" alt="avatar" class="comments__img">
                                <div class="comments__content">
                                    <div class="comments__content-top">
                                        <p class="comments__content-name">Michle Jhon</p>
                                        |
                                        <p class="comments__content-date">2 days ago</p>
                                        <div class="star comments__content-star" data-rateyo-rating="4"></div>
                                    </div>
                                    <p class="comments__content-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                        aliqua. Qus ipsum speissei ultrices gravida. Risus commodo viverra maeenas accumsan lacus vel facilisis.
                                    </p>
                                    <a class="comments__content-reply" href="#">Reply</a>
                                </div>
                            </div>
                            <form action="#" class="comments-form">
                                <p class="comments-form__title">
                                    Add your review
                                </p>
                                <div class="comments-form__rating">
                                    <span class="comments-form__rating-title">Your Rating</span>
                                    <label class="comments-form__label">
                                        <input class="comments-form__input" type="radio" name="star" checked>
                                        <span class="comments-form__radio">
                          <svg
                              xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="18px"
                              height="16px"
                              viewbox="0 0 18 16"
                              version="1.1">
                            <g id="surface1">
                              <path
                                  style=" stroke:none;fill-rule:nonzero;fill-opacity:1;"
                                  d="M 8.101562 0.554688 L 6.0625 4.695312 L 1.496094 5.359375 C 0.679688 5.476562 0.351562 6.488281 0.945312 7.066406 L
                                  4.246094 10.285156 L 3.464844 14.832031 C 3.324219 15.652344 4.191406 16.269531 4.914062 15.882812 L 9 13.738281 L
                                  13.085938 15.882812 C 13.808594 16.265625 14.675781 15.652344 14.535156 14.832031 L 13.753906 10.285156 L 17.054688
                                  7.066406 C 17.648438 6.488281 17.320312 5.476562 16.503906 5.359375 L 11.9375 4.695312 L 9.898438 0.554688 C 9.53125
                                  -0.179688 8.472656 -0.191406 8.101562 0.554688 Z M 8.101562 0.554688 "/>
                            </g>
                          </svg>
                        </span>
                                    </label>
                                    <label class="comments-form__label">
                                        <input class="comments-form__input" type="radio" name="star">
                                        <span class="comments-form__radio">
                          <svg
                              xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="18px"
                              height="16px"
                              viewbox="0 0 18 16"
                              version="1.1">
                            <g id="surface1">
                              <path
                                  style=" stroke:none;fill-rule:nonzero;fill-opacity:1;"
                                  d="M 8.101562 0.554688 L 6.0625 4.695312 L 1.496094 5.359375 C 0.679688 5.476562 0.351562 6.488281 0.945312 7.066406 L
                                  4.246094 10.285156 L 3.464844 14.832031 C 3.324219 15.652344 4.191406 16.269531 4.914062 15.882812 L 9 13.738281 L
                                  13.085938 15.882812 C 13.808594 16.265625 14.675781 15.652344 14.535156 14.832031 L 13.753906 10.285156 L 17.054688
                                  7.066406 C 17.648438 6.488281 17.320312 5.476562 16.503906 5.359375 L 11.9375 4.695312 L 9.898438 0.554688 C 9.53125
                                  -0.179688 8.472656 -0.191406 8.101562 0.554688 Z M 8.101562 0.554688 "/>
                            </g>
                          </svg>
                          <svg
                              xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="18px"
                              height="16px"
                              viewbox="0 0 18 16"
                              version="1.1">
                            <g id="surface1">
                              <path
                                  style=" stroke:none;fill-rule:nonzero;fill-opacity:1;"
                                  d="M 8.101562 0.554688 L 6.0625 4.695312 L 1.496094 5.359375 C 0.679688 5.476562 0.351562 6.488281 0.945312 7.066406 L
                                  4.246094 10.285156 L 3.464844 14.832031 C 3.324219 15.652344 4.191406 16.269531 4.914062 15.882812 L 9 13.738281 L
                                  13.085938 15.882812 C 13.808594 16.265625 14.675781 15.652344 14.535156 14.832031 L 13.753906 10.285156 L 17.054688
                                  7.066406 C 17.648438 6.488281 17.320312 5.476562 16.503906 5.359375 L 11.9375 4.695312 L 9.898438 0.554688 C 9.53125
                                  -0.179688 8.472656 -0.191406 8.101562 0.554688 Z M 8.101562 0.554688 "/>
                            </g>
                          </svg>
                        </span>
                                    </label>
                                    <label class="comments-form__label">
                                        <input class="comments-form__input" type="radio" name="star">
                                        <span class="comments-form__radio">
                          <svg
                              xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="18px"
                              height="16px"
                              viewbox="0 0 18 16"
                              version="1.1">
                            <g id="surface1">
                              <path
                                  style=" stroke:none;fill-rule:nonzero;fill-opacity:1;"
                                  d="M 8.101562 0.554688 L 6.0625 4.695312 L 1.496094 5.359375 C 0.679688 5.476562 0.351562 6.488281 0.945312 7.066406 L
                                  4.246094 10.285156 L 3.464844 14.832031 C 3.324219 15.652344 4.191406 16.269531 4.914062 15.882812 L 9 13.738281 L
                                  13.085938 15.882812 C 13.808594 16.265625 14.675781 15.652344 14.535156 14.832031 L 13.753906 10.285156 L 17.054688
                                  7.066406 C 17.648438 6.488281 17.320312 5.476562 16.503906 5.359375 L 11.9375 4.695312 L 9.898438 0.554688 C 9.53125
                                  -0.179688 8.472656 -0.191406 8.101562 0.554688 Z M 8.101562 0.554688 "/>
                            </g>
                          </svg>
                          <svg
                              xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="18px"
                              height="16px"
                              viewbox="0 0 18 16"
                              version="1.1">
                            <g id="surface1">
                              <path
                                  style=" stroke:none;fill-rule:nonzero;fill-opacity:1;"
                                  d="M 8.101562 0.554688 L 6.0625 4.695312 L 1.496094 5.359375 C 0.679688 5.476562 0.351562 6.488281 0.945312 7.066406 L
                                  4.246094 10.285156 L 3.464844 14.832031 C 3.324219 15.652344 4.191406 16.269531 4.914062 15.882812 L 9 13.738281 L
                                  13.085938 15.882812 C 13.808594 16.265625 14.675781 15.652344 14.535156 14.832031 L 13.753906 10.285156 L 17.054688
                                  7.066406 C 17.648438 6.488281 17.320312 5.476562 16.503906 5.359375 L 11.9375 4.695312 L 9.898438 0.554688 C 9.53125
                                  -0.179688 8.472656 -0.191406 8.101562 0.554688 Z M 8.101562 0.554688 "/>
                            </g>
                          </svg>
                          <svg
                              xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="18px"
                              height="16px"
                              viewbox="0 0 18 16"
                              version="1.1">
                            <g id="surface1">
                              <path
                                  style=" stroke:none;fill-rule:nonzero;fill-opacity:1;"
                                  d="M 8.101562 0.554688 L 6.0625 4.695312 L 1.496094 5.359375 C 0.679688 5.476562 0.351562 6.488281 0.945312 7.066406 L
                                  4.246094 10.285156 L 3.464844 14.832031 C 3.324219 15.652344 4.191406 16.269531 4.914062 15.882812 L 9 13.738281 L
                                  13.085938 15.882812 C 13.808594 16.265625 14.675781 15.652344 14.535156 14.832031 L 13.753906 10.285156 L 17.054688
                                  7.066406 C 17.648438 6.488281 17.320312 5.476562 16.503906 5.359375 L 11.9375 4.695312 L 9.898438 0.554688 C 9.53125
                                  -0.179688 8.472656 -0.191406 8.101562 0.554688 Z M 8.101562 0.554688 "/>
                            </g>
                          </svg>
                        </span>
                                    </label>
                                    <label class="comments-form__label">
                                        <input class="comments-form__input" type="radio" name="star">
                                        <span class="comments-form__radio">
                          <svg
                              xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="18px"
                              height="16px"
                              viewbox="0 0 18 16"
                              version="1.1">
                            <g id="surface1">
                              <path
                                  style=" stroke:none;fill-rule:nonzero;fill-opacity:1;"
                                  d="M 8.101562 0.554688 L 6.0625 4.695312 L 1.496094 5.359375 C 0.679688 5.476562 0.351562 6.488281 0.945312 7.066406 L
                                  4.246094 10.285156 L 3.464844 14.832031 C 3.324219 15.652344 4.191406 16.269531 4.914062 15.882812 L 9 13.738281 L
                                  13.085938 15.882812 C 13.808594 16.265625 14.675781 15.652344 14.535156 14.832031 L 13.753906 10.285156 L 17.054688
                                  7.066406 C 17.648438 6.488281 17.320312 5.476562 16.503906 5.359375 L 11.9375 4.695312 L 9.898438 0.554688 C 9.53125
                                  -0.179688 8.472656 -0.191406 8.101562 0.554688 Z M 8.101562 0.554688 "/>
                            </g>
                          </svg>
                          <svg
                              xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="18px"
                              height="16px"
                              viewbox="0 0 18 16"
                              version="1.1">
                            <g id="surface1">
                              <path
                                  style=" stroke:none;fill-rule:nonzero;fill-opacity:1;"
                                  d="M 8.101562 0.554688 L 6.0625 4.695312 L 1.496094 5.359375 C 0.679688 5.476562 0.351562 6.488281 0.945312 7.066406 L
                                  4.246094 10.285156 L 3.464844 14.832031 C 3.324219 15.652344 4.191406 16.269531 4.914062 15.882812 L 9 13.738281 L
                                  13.085938 15.882812 C 13.808594 16.265625 14.675781 15.652344 14.535156 14.832031 L 13.753906 10.285156 L 17.054688
                                  7.066406 C 17.648438 6.488281 17.320312 5.476562 16.503906 5.359375 L 11.9375 4.695312 L 9.898438 0.554688 C 9.53125
                                  -0.179688 8.472656 -0.191406 8.101562 0.554688 Z M 8.101562 0.554688 "/>
                            </g>
                          </svg>
                          <svg
                              xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="18px"
                              height="16px"
                              viewbox="0 0 18 16"
                              version="1.1">
                            <g id="surface1">
                              <path
                                  style=" stroke:none;fill-rule:nonzero;fill-opacity:1;"
                                  d="M 8.101562 0.554688 L 6.0625 4.695312 L 1.496094 5.359375 C 0.679688 5.476562 0.351562 6.488281 0.945312 7.066406 L
                                  4.246094 10.285156 L 3.464844 14.832031 C 3.324219 15.652344 4.191406 16.269531 4.914062 15.882812 L 9 13.738281 L
                                  13.085938 15.882812 C 13.808594 16.265625 14.675781 15.652344 14.535156 14.832031 L 13.753906 10.285156 L 17.054688
                                  7.066406 C 17.648438 6.488281 17.320312 5.476562 16.503906 5.359375 L 11.9375 4.695312 L 9.898438 0.554688 C 9.53125
                                  -0.179688 8.472656 -0.191406 8.101562 0.554688 Z M 8.101562 0.554688 "/>
                            </g>
                          </svg>
                          <svg
                              xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="18px"
                              height="16px"
                              viewbox="0 0 18 16"
                              version="1.1">
                            <g id="surface1">
                              <path
                                  style=" stroke:none;fill-rule:nonzero;fill-opacity:1;"
                                  d="M 8.101562 0.554688 L 6.0625 4.695312 L 1.496094 5.359375 C 0.679688 5.476562 0.351562 6.488281 0.945312 7.066406 L
                                  4.246094 10.285156 L 3.464844 14.832031 C 3.324219 15.652344 4.191406 16.269531 4.914062 15.882812 L 9 13.738281 L
                                  13.085938 15.882812 C 13.808594 16.265625 14.675781 15.652344 14.535156 14.832031 L 13.753906 10.285156 L 17.054688
                                  7.066406 C 17.648438 6.488281 17.320312 5.476562 16.503906 5.359375 L 11.9375 4.695312 L 9.898438 0.554688 C 9.53125
                                  -0.179688 8.472656 -0.191406 8.101562 0.554688 Z M 8.101562 0.554688 "/>
                            </g>
                          </svg>
                        </span>
                                    </label>
                                    <label class="comments-form__label">
                                        <input class="comments-form__input" type="radio" name="star">
                                        <span class="comments-form__radio">
                          <svg
                              xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="18px"
                              height="16px"
                              viewbox="0 0 18 16"
                              version="1.1">
                            <g id="surface1">
                              <path
                                  style=" stroke:none;fill-rule:nonzero;fill-opacity:1;"
                                  d="M 8.101562 0.554688 L 6.0625 4.695312 L 1.496094 5.359375 C 0.679688 5.476562 0.351562 6.488281 0.945312 7.066406 L
                                  4.246094 10.285156 L 3.464844 14.832031 C 3.324219 15.652344 4.191406 16.269531 4.914062 15.882812 L 9 13.738281 L
                                  13.085938 15.882812 C 13.808594 16.265625 14.675781 15.652344 14.535156 14.832031 L 13.753906 10.285156 L 17.054688
                                  7.066406 C 17.648438 6.488281 17.320312 5.476562 16.503906 5.359375 L 11.9375 4.695312 L 9.898438 0.554688 C 9.53125
                                  -0.179688 8.472656 -0.191406 8.101562 0.554688 Z M 8.101562 0.554688 "/>
                            </g>
                          </svg>
                          <svg
                              xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="18px"
                              height="16px"
                              viewbox="0 0 18 16"
                              version="1.1">
                            <g id="surface1">
                              <path
                                  style=" stroke:none;fill-rule:nonzero;fill-opacity:1;"
                                  d="M 8.101562 0.554688 L 6.0625 4.695312 L 1.496094 5.359375 C 0.679688 5.476562 0.351562 6.488281 0.945312 7.066406 L
                                  4.246094 10.285156 L 3.464844 14.832031 C 3.324219 15.652344 4.191406 16.269531 4.914062 15.882812 L 9 13.738281 L
                                  13.085938 15.882812 C 13.808594 16.265625 14.675781 15.652344 14.535156 14.832031 L 13.753906 10.285156 L 17.054688
                                  7.066406 C 17.648438 6.488281 17.320312 5.476562 16.503906 5.359375 L 11.9375 4.695312 L 9.898438 0.554688 C 9.53125
                                  -0.179688 8.472656 -0.191406 8.101562 0.554688 Z M 8.101562 0.554688 "/>
                            </g>
                          </svg>
                          <svg
                              xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="18px"
                              height="16px"
                              viewbox="0 0 18 16"
                              version="1.1">
                            <g id="surface1">
                              <path
                                  style=" stroke:none;fill-rule:nonzero;fill-opacity:1;"
                                  d="M 8.101562 0.554688 L 6.0625 4.695312 L 1.496094 5.359375 C 0.679688 5.476562 0.351562 6.488281 0.945312 7.066406 L
                                  4.246094 10.285156 L 3.464844 14.832031 C 3.324219 15.652344 4.191406 16.269531 4.914062 15.882812 L 9 13.738281 L
                                  13.085938 15.882812 C 13.808594 16.265625 14.675781 15.652344 14.535156 14.832031 L 13.753906 10.285156 L 17.054688
                                  7.066406 C 17.648438 6.488281 17.320312 5.476562 16.503906 5.359375 L 11.9375 4.695312 L 9.898438 0.554688 C 9.53125
                                  -0.179688 8.472656 -0.191406 8.101562 0.554688 Z M 8.101562 0.554688 "/>
                            </g>
                          </svg>
                          <svg
                              xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="18px"
                              height="16px"
                              viewbox="0 0 18 16"
                              version="1.1">
                            <g id="surface1">
                              <path
                                  style=" stroke:none;fill-rule:nonzero;fill-opacity:1;"
                                  d="M 8.101562 0.554688 L 6.0625 4.695312 L 1.496094 5.359375 C 0.679688 5.476562 0.351562 6.488281 0.945312 7.066406 L
                                  4.246094 10.285156 L 3.464844 14.832031 C 3.324219 15.652344 4.191406 16.269531 4.914062 15.882812 L 9 13.738281 L
                                  13.085938 15.882812 C 13.808594 16.265625 14.675781 15.652344 14.535156 14.832031 L 13.753906 10.285156 L 17.054688
                                  7.066406 C 17.648438 6.488281 17.320312 5.476562 16.503906 5.359375 L 11.9375 4.695312 L 9.898438 0.554688 C 9.53125
                                  -0.179688 8.472656 -0.191406 8.101562 0.554688 Z M 8.101562 0.554688 "/>
                            </g>
                          </svg>
                          <svg
                              xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="18px"
                              height="16px"
                              viewbox="0 0 18 16"
                              version="1.1">
                            <g id="surface1">
                              <path
                                  style=" stroke:none;fill-rule:nonzero;fill-opacity:1;"
                                  d="M 8.101562 0.554688 L 6.0625 4.695312 L 1.496094 5.359375 C 0.679688 5.476562 0.351562 6.488281 0.945312 7.066406 L
                                  4.246094 10.285156 L 3.464844 14.832031 C 3.324219 15.652344 4.191406 16.269531 4.914062 15.882812 L 9 13.738281 L
                                  13.085938 15.882812 C 13.808594 16.265625 14.675781 15.652344 14.535156 14.832031 L 13.753906 10.285156 L 17.054688
                                  7.066406 C 17.648438 6.488281 17.320312 5.476562 16.503906 5.359375 L 11.9375 4.695312 L 9.898438 0.554688 C 9.53125
                                  -0.179688 8.472656 -0.191406 8.101562 0.554688 Z M 8.101562 0.554688 "/>
                            </g>
                          </svg>
                        </span>
                                    </label>
                                </div>
                                <div class="comments-form__box-input">
                                    <input class="comments-form__text-input" type="text" placeholder="Your name">
                                    <input class="comments-form__text-input" type="text" placeholder="E-mail address">
                                </div>
                                <textarea class="comments-form__textarea" placeholder="Your text here"></textarea>
                                <button class="comments-form__btn" type=" submit">Leave Review</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="related">
            <div class="container">
                <h3 class="title related__title">RELATED PRODUCTS</h3>
                <div class="related__items">
                    <div class="product-item product-item--sale">
                        <div class="product-item__top-box top-box">
                            <a href="product.html" class="top-box__img-link">
                                <img class="top-box__img" src="images/product/1.jpg" alt="product">
                            </a>
                            <div class="top-box__link-box">
                                <a class="top-box__link" href="shop.html">
                                    <svg width="19" height="20"><path fill="#29282D" fill-rule="evenodd" d="m18.709 18.219-4.681-4.95a8.142 8.142 0 0 0 1.863-5.194c0-4.453-3.563-8.077-7.944-8.077C3.568-.002.005 3.622.005 8.075c0 4.454 3.563 8.078 7.942 8.078a7.756 7.756 0 0 0 4.551-1.463l4.718 4.99a1.022 1.022 0 0 0 1.464.03 1.068 1.068 0 0 0 .029-1.491ZM7.947 2.106c3.238 0 5.872 2.679 5.872 5.969 0 3.292-2.634 5.971-5.872 5.971-3.236 0-5.869-2.679-5.869-5.971 0-3.29 2.633-5.969 5.869-5.969Z"/></svg>
                                </a>
                                <a class="top-box__link top-box__link--line" href="login.html">
                                    <svg width="16" height="20"><path fill="#29282D" fill-rule="evenodd" d="M15.999 17.294 14.854 4.396a.55.55 0 0 0-.547-.504h-2.354A3.953 3.953 0 0 0 8.005.002a3.953 3.953 0 0 0-3.948 3.89H1.703a.547.547 0 0 0-.547.504L.011 17.294c0 .017-.004.033-.004.049 0 1.469 1.345 2.663 3 2.663h9.996c1.655 0 3-1.194 3-2.663 0-.016 0-.032-.004-.049ZM8.005 1.106a2.848 2.848 0 0 1 2.844 2.786H5.161a2.848 2.848 0 0 1 2.844-2.786Zm4.998 17.796H3.007c-1.038 0-1.88-.687-1.896-1.534L2.206 5.001h1.847v1.677a.55.55 0 0 0 .552.552.55.55 0 0 0 .552-.552V5.001h5.692v1.677a.55.55 0 0 0 .552.552.55.55 0 0 0 .552-.552V5.001H13.8l1.099 12.367c-.016.847-.862 1.534-1.896 1.534Z"/></svg>
                                </a>
                                <a class="top-box__link" href="login.html">
                                    <svg width="23" height="20"><path fill="#29282D" fill-rule="evenodd" d="M16.894-.001c-2.424 0-3.959 1.424-4.82 2.619a8.851 8.851 0 0 0-.573.914 8.522 8.522 0 0 0-.573-.914c-.86-1.195-2.395-2.619-4.82-2.619-1.724 0-3.298.698-4.433 1.965C.593 3.172-.004 4.791-.004 6.521c0 1.884.748 3.636 2.353 5.513 1.434 1.679 3.498 3.409 5.887 5.413.891.746 1.811 1.518 2.792 2.362l.029.025a.678.678 0 0 0 .888 0l.03-.025c.98-.844 1.901-1.616 2.791-2.362 2.39-2.004 4.453-3.734 5.887-5.413 1.605-1.877 2.353-3.629 2.353-5.513 0-1.73-.596-3.349-1.679-4.557C20.192.696 18.618-.001 16.894-.001Zm-3.002 16.438a301.82 301.82 0 0 0-2.391 2.018c-.833-.712-1.623-1.374-2.39-2.018-4.677-3.921-7.766-6.511-7.766-9.916 0-1.407.476-2.715 1.342-3.681a4.53 4.53 0 0 1 3.421-1.515c1.849 0 3.043 1.12 3.72 2.06a7.819 7.819 0 0 1 1.032 2.019.674.674 0 0 0 .641.458.673.673 0 0 0 .641-.458 7.819 7.819 0 0 1 1.032-2.019c.677-.94 1.872-2.06 3.72-2.06 1.331 0 2.546.538 3.422 1.515.865.966 1.342 2.274 1.342 3.681 0 3.405-3.09 5.995-7.766 9.916Z"/></svg>
                                </a>
                            </div>
                        </div>

                        <div class="product-item__bottom-box bottom-box">
                            <div class="bottom-box__wrapper">
                                <div class="bottom-box__star star" data-rateyo-rating='4.7'></div>
                                <a href="product.html" class="bottom-box__title-link">
                                    <h4 class="bottom-box__title">White Polo Men’s T-Shirt Lorem ipsum dolor sit amet.</h4>
                                </a>
                                <div class="bottom-box__price">
                                    <div class="bottom-box__new-price">$34.00</div>
                                    <div class="bottom-box__old-price">$27.00</div>
                                </div>
                            </div>
                            <div class="bottom-box__content-box">
                                <p class="bottom-box__text">
                                    Lorem ipsum dolor sit amet, adipiscing elit, sed de eusmod utlitoi labore et dolore magna aliqua.
                                </p>
                                <button class="bottom-box__btn">
                                    Add to cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="product-item">
                        <div class="product-item__top-box top-box">
                            <a href="product.html" class="top-box__img-link">
                                <img class="top-box__img" src="images/product/2.jpg" alt="product">
                            </a>
                            <div class="top-box__link-box">
                                <a class="top-box__link" href="shop.html">
                                    <svg width="19" height="20"><path fill="#29282D" fill-rule="evenodd" d="m18.709 18.219-4.681-4.95a8.142 8.142 0 0 0 1.863-5.194c0-4.453-3.563-8.077-7.944-8.077C3.568-.002.005 3.622.005 8.075c0 4.454 3.563 8.078 7.942 8.078a7.756 7.756 0 0 0 4.551-1.463l4.718 4.99a1.022 1.022 0 0 0 1.464.03 1.068 1.068 0 0 0 .029-1.491ZM7.947 2.106c3.238 0 5.872 2.679 5.872 5.969 0 3.292-2.634 5.971-5.872 5.971-3.236 0-5.869-2.679-5.869-5.971 0-3.29 2.633-5.969 5.869-5.969Z"/></svg>
                                </a>
                                <a class="top-box__link top-box__link--line" href="login.html">
                                    <svg width="16" height="20"><path fill="#29282D" fill-rule="evenodd" d="M15.999 17.294 14.854 4.396a.55.55 0 0 0-.547-.504h-2.354A3.953 3.953 0 0 0 8.005.002a3.953 3.953 0 0 0-3.948 3.89H1.703a.547.547 0 0 0-.547.504L.011 17.294c0 .017-.004.033-.004.049 0 1.469 1.345 2.663 3 2.663h9.996c1.655 0 3-1.194 3-2.663 0-.016 0-.032-.004-.049ZM8.005 1.106a2.848 2.848 0 0 1 2.844 2.786H5.161a2.848 2.848 0 0 1 2.844-2.786Zm4.998 17.796H3.007c-1.038 0-1.88-.687-1.896-1.534L2.206 5.001h1.847v1.677a.55.55 0 0 0 .552.552.55.55 0 0 0 .552-.552V5.001h5.692v1.677a.55.55 0 0 0 .552.552.55.55 0 0 0 .552-.552V5.001H13.8l1.099 12.367c-.016.847-.862 1.534-1.896 1.534Z"/></svg>
                                </a>
                                <a class="top-box__link" href="login.html">
                                    <svg width="23" height="20"><path fill="#29282D" fill-rule="evenodd" d="M16.894-.001c-2.424 0-3.959 1.424-4.82 2.619a8.851 8.851 0 0 0-.573.914 8.522 8.522 0 0 0-.573-.914c-.86-1.195-2.395-2.619-4.82-2.619-1.724 0-3.298.698-4.433 1.965C.593 3.172-.004 4.791-.004 6.521c0 1.884.748 3.636 2.353 5.513 1.434 1.679 3.498 3.409 5.887 5.413.891.746 1.811 1.518 2.792 2.362l.029.025a.678.678 0 0 0 .888 0l.03-.025c.98-.844 1.901-1.616 2.791-2.362 2.39-2.004 4.453-3.734 5.887-5.413 1.605-1.877 2.353-3.629 2.353-5.513 0-1.73-.596-3.349-1.679-4.557C20.192.696 18.618-.001 16.894-.001Zm-3.002 16.438a301.82 301.82 0 0 0-2.391 2.018c-.833-.712-1.623-1.374-2.39-2.018-4.677-3.921-7.766-6.511-7.766-9.916 0-1.407.476-2.715 1.342-3.681a4.53 4.53 0 0 1 3.421-1.515c1.849 0 3.043 1.12 3.72 2.06a7.819 7.819 0 0 1 1.032 2.019.674.674 0 0 0 .641.458.673.673 0 0 0 .641-.458 7.819 7.819 0 0 1 1.032-2.019c.677-.94 1.872-2.06 3.72-2.06 1.331 0 2.546.538 3.422 1.515.865.966 1.342 2.274 1.342 3.681 0 3.405-3.09 5.995-7.766 9.916Z"/></svg>
                                </a>
                            </div>
                        </div>

                        <div class="product-item__bottom-box bottom-box">
                            <div class="bottom-box__wrapper">
                                <div class="bottom-box__star star" data-rateyo-rating='4.9'></div>
                                <a href="product.html" class="bottom-box__title-link">
                                    <h4 class="bottom-box__title">White Polo Men’s T-Shirt</h4>
                                </a>
                                <div class="bottom-box__price">
                                    <div class="bottom-box__new-price">$34.00</div>
                                    <div class="bottom-box__old-price">$27.00</div>
                                </div>
                            </div>
                            <div class="bottom-box__content-box">
                                <p class="bottom-box__text">
                                    Lorem ipsum dolor sit amet, adipiscing elit, sed de eusmod utlitoi labore et dolore magna aliqua.
                                </p>
                                <button class="bottom-box__btn">
                                    Add to cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="product-item">
                        <div class="product-item__top-box top-box">
                            <a href="product.html" class="top-box__img-link">
                                <img class="top-box__img" src="images/product/3.jpg" alt="product">
                            </a>
                            <div class="top-box__link-box">
                                <a class="top-box__link" href="shop.html">
                                    <svg width="19" height="20"><path fill="#29282D" fill-rule="evenodd" d="m18.709 18.219-4.681-4.95a8.142 8.142 0 0 0 1.863-5.194c0-4.453-3.563-8.077-7.944-8.077C3.568-.002.005 3.622.005 8.075c0 4.454 3.563 8.078 7.942 8.078a7.756 7.756 0 0 0 4.551-1.463l4.718 4.99a1.022 1.022 0 0 0 1.464.03 1.068 1.068 0 0 0 .029-1.491ZM7.947 2.106c3.238 0 5.872 2.679 5.872 5.969 0 3.292-2.634 5.971-5.872 5.971-3.236 0-5.869-2.679-5.869-5.971 0-3.29 2.633-5.969 5.869-5.969Z"/></svg>
                                </a>
                                <a class="top-box__link top-box__link--line" href="login.html">
                                    <svg width="16" height="20"><path fill="#29282D" fill-rule="evenodd" d="M15.999 17.294 14.854 4.396a.55.55 0 0 0-.547-.504h-2.354A3.953 3.953 0 0 0 8.005.002a3.953 3.953 0 0 0-3.948 3.89H1.703a.547.547 0 0 0-.547.504L.011 17.294c0 .017-.004.033-.004.049 0 1.469 1.345 2.663 3 2.663h9.996c1.655 0 3-1.194 3-2.663 0-.016 0-.032-.004-.049ZM8.005 1.106a2.848 2.848 0 0 1 2.844 2.786H5.161a2.848 2.848 0 0 1 2.844-2.786Zm4.998 17.796H3.007c-1.038 0-1.88-.687-1.896-1.534L2.206 5.001h1.847v1.677a.55.55 0 0 0 .552.552.55.55 0 0 0 .552-.552V5.001h5.692v1.677a.55.55 0 0 0 .552.552.55.55 0 0 0 .552-.552V5.001H13.8l1.099 12.367c-.016.847-.862 1.534-1.896 1.534Z"/></svg>
                                </a>
                                <a class="top-box__link" href="login.html">
                                    <svg width="23" height="20"><path fill="#29282D" fill-rule="evenodd" d="M16.894-.001c-2.424 0-3.959 1.424-4.82 2.619a8.851 8.851 0 0 0-.573.914 8.522 8.522 0 0 0-.573-.914c-.86-1.195-2.395-2.619-4.82-2.619-1.724 0-3.298.698-4.433 1.965C.593 3.172-.004 4.791-.004 6.521c0 1.884.748 3.636 2.353 5.513 1.434 1.679 3.498 3.409 5.887 5.413.891.746 1.811 1.518 2.792 2.362l.029.025a.678.678 0 0 0 .888 0l.03-.025c.98-.844 1.901-1.616 2.791-2.362 2.39-2.004 4.453-3.734 5.887-5.413 1.605-1.877 2.353-3.629 2.353-5.513 0-1.73-.596-3.349-1.679-4.557C20.192.696 18.618-.001 16.894-.001Zm-3.002 16.438a301.82 301.82 0 0 0-2.391 2.018c-.833-.712-1.623-1.374-2.39-2.018-4.677-3.921-7.766-6.511-7.766-9.916 0-1.407.476-2.715 1.342-3.681a4.53 4.53 0 0 1 3.421-1.515c1.849 0 3.043 1.12 3.72 2.06a7.819 7.819 0 0 1 1.032 2.019.674.674 0 0 0 .641.458.673.673 0 0 0 .641-.458 7.819 7.819 0 0 1 1.032-2.019c.677-.94 1.872-2.06 3.72-2.06 1.331 0 2.546.538 3.422 1.515.865.966 1.342 2.274 1.342 3.681 0 3.405-3.09 5.995-7.766 9.916Z"/></svg>
                                </a>
                            </div>
                        </div>

                        <div class="product-item__bottom-box bottom-box">
                            <div class="bottom-box__wrapper">
                                <div class="bottom-box__star star" data-rateyo-rating='4.3'></div>
                                <a href="product.html" class="bottom-box__title-link">
                                    <h4 class="bottom-box__title">White Polo Men’s T-Shirt</h4>
                                </a>
                                <div class="bottom-box__price">
                                    <div class="bottom-box__new-price">$34.00</div>
                                    <div class="bottom-box__old-price">$27.00</div>
                                </div>
                            </div>
                            <div class="bottom-box__content-box">
                                <p class="bottom-box__text">
                                    Lorem ipsum dolor sit amet, adipiscing elit, sed de eusmod utlitoi labore et dolore magna aliqua.
                                </p>
                                <button class="bottom-box__btn">
                                    Add to cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="product-item product-item--sale">
                        <div class="product-item__top-box top-box">
                            <a href="product.html" class="top-box__img-link">
                                <img class="top-box__img" src="images/product/4.jpg" alt="product">
                            </a>
                            <div class="top-box__link-box">
                                <a class="top-box__link" href="shop.html">
                                    <svg width="19" height="20"><path fill="#29282D" fill-rule="evenodd" d="m18.709 18.219-4.681-4.95a8.142 8.142 0 0 0 1.863-5.194c0-4.453-3.563-8.077-7.944-8.077C3.568-.002.005 3.622.005 8.075c0 4.454 3.563 8.078 7.942 8.078a7.756 7.756 0 0 0 4.551-1.463l4.718 4.99a1.022 1.022 0 0 0 1.464.03 1.068 1.068 0 0 0 .029-1.491ZM7.947 2.106c3.238 0 5.872 2.679 5.872 5.969 0 3.292-2.634 5.971-5.872 5.971-3.236 0-5.869-2.679-5.869-5.971 0-3.29 2.633-5.969 5.869-5.969Z"/></svg>
                                </a>
                                <a class="top-box__link top-box__link--line" href="login.html">
                                    <svg width="16" height="20"><path fill="#29282D" fill-rule="evenodd" d="M15.999 17.294 14.854 4.396a.55.55 0 0 0-.547-.504h-2.354A3.953 3.953 0 0 0 8.005.002a3.953 3.953 0 0 0-3.948 3.89H1.703a.547.547 0 0 0-.547.504L.011 17.294c0 .017-.004.033-.004.049 0 1.469 1.345 2.663 3 2.663h9.996c1.655 0 3-1.194 3-2.663 0-.016 0-.032-.004-.049ZM8.005 1.106a2.848 2.848 0 0 1 2.844 2.786H5.161a2.848 2.848 0 0 1 2.844-2.786Zm4.998 17.796H3.007c-1.038 0-1.88-.687-1.896-1.534L2.206 5.001h1.847v1.677a.55.55 0 0 0 .552.552.55.55 0 0 0 .552-.552V5.001h5.692v1.677a.55.55 0 0 0 .552.552.55.55 0 0 0 .552-.552V5.001H13.8l1.099 12.367c-.016.847-.862 1.534-1.896 1.534Z"/></svg>
                                </a>
                                <a class="top-box__link" href="login.html">
                                    <svg width="23" height="20"><path fill="#29282D" fill-rule="evenodd" d="M16.894-.001c-2.424 0-3.959 1.424-4.82 2.619a8.851 8.851 0 0 0-.573.914 8.522 8.522 0 0 0-.573-.914c-.86-1.195-2.395-2.619-4.82-2.619-1.724 0-3.298.698-4.433 1.965C.593 3.172-.004 4.791-.004 6.521c0 1.884.748 3.636 2.353 5.513 1.434 1.679 3.498 3.409 5.887 5.413.891.746 1.811 1.518 2.792 2.362l.029.025a.678.678 0 0 0 .888 0l.03-.025c.98-.844 1.901-1.616 2.791-2.362 2.39-2.004 4.453-3.734 5.887-5.413 1.605-1.877 2.353-3.629 2.353-5.513 0-1.73-.596-3.349-1.679-4.557C20.192.696 18.618-.001 16.894-.001Zm-3.002 16.438a301.82 301.82 0 0 0-2.391 2.018c-.833-.712-1.623-1.374-2.39-2.018-4.677-3.921-7.766-6.511-7.766-9.916 0-1.407.476-2.715 1.342-3.681a4.53 4.53 0 0 1 3.421-1.515c1.849 0 3.043 1.12 3.72 2.06a7.819 7.819 0 0 1 1.032 2.019.674.674 0 0 0 .641.458.673.673 0 0 0 .641-.458 7.819 7.819 0 0 1 1.032-2.019c.677-.94 1.872-2.06 3.72-2.06 1.331 0 2.546.538 3.422 1.515.865.966 1.342 2.274 1.342 3.681 0 3.405-3.09 5.995-7.766 9.916Z"/></svg>
                                </a>
                            </div>
                        </div>

                        <div class="product-item__bottom-box bottom-box">
                            <div class="bottom-box__wrapper">
                                <div class="bottom-box__star star" data-rateyo-rating='3.3'></div>
                                <a href="product.html" class="bottom-box__title-link">
                                    <h4 class="bottom-box__title">White Polo Men’s T-Shirt</h4>
                                </a>
                                <div class="bottom-box__price">
                                    <div class="bottom-box__new-price">$34.00</div>
                                    <div class="bottom-box__old-price">$27.00</div>
                                </div>
                            </div>
                            <div class="bottom-box__content-box">
                                <p class="bottom-box__text">
                                    Lorem ipsum dolor sit amet, adipiscing elit, sed de eusmod utlitoi labore et dolore magna aliqua.
                                </p>
                                <button class="bottom-box__btn">
                                    Add to cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="product-item">
                      <div class="product-item__img-box">
                        <img class="product-item__images" src="images/product/1.jpg" alt="product">
                      </div>
                      <div class="product-item__wrapper-box">
                        <div class="product-item__box">
                          <div class="star" data-rateyo-rating='4.7'></div>
                          <h4 class="product-item__title">White Polo Men’s T-Shirt</h4>
                          <div class="product-item__price">
                            <div class="product-item__new-price">$34.00</div>
                            <div class="product-item__old-price">$27.00</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="product-item">
                      <div class="product-item__img-box">
                        <img class="product-item__images" src="images/product/2.jpg" alt="product">
                      </div>
                      <div class="product-item__wrapper-box">
                        <div class="product-item__box">
                          <div class="star" data-rateyo-rating='4.7'></div>
                          <h4 class="product-item__title">White Polo Men’s T-Shirt</h4>
                          <div class="product-item__price">
                            <div class="product-item__new-price">$34.00</div>
                            <div class="product-item__old-price">$27.00</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="product-item">
                      <div class="product-item__img-box">
                        <img class="product-item__images" src="images/product/3.jpg" alt="product">
                      </div>
                      <div class="product-item__wrapper-box">
                        <div class="product-item__box">
                          <div class="star" data-rateyo-rating='4.7'></div>
                          <h4 class="product-item__title">White Polo Men’s T-Shirt</h4>
                          <div class="product-item__price">
                            <div class="product-item__new-price">$34.00</div>
                            <div class="product-item__old-price">$27.00</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="product-item">
                      <div class="product-item__img-box">
                        <img class="product-item__images" src="images/product/4.jpg" alt="product">
                      </div>
                      <div class="product-item__wrapper-box">
                        <div class="product-item__box">
                          <div class="star" data-rateyo-rating='4.7'></div>
                          <h4 class="product-item__title">White Polo Men’s T-Shirt</h4>
                          <div class="product-item__price">
                            <div class="product-item__new-price">$34.00</div>
                            <div class="product-item__old-price">$27.00</div>
                          </div>
                        </div>
                      </div>
                    </div> -->
                </div>
            </div>
        </section>
    </main>
@endsection
