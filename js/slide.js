class Carousel {
  /**
   * @param {HTMLElement} element
   * @param {object} options.slidesToScroll Nomber d'element a faire defiler
   * @param {object} options.slidesVisible Nombre d'element visible dans un slide
   */

  constructor(element, options = {}) {
      this.element = element;
      this.options = Object.assign({}, {
        slidesToScroll: 1,
        slidesVisible: 1
      }, options);

      this.children = [].slice.call(element.children)
      const ratio = this.children.length / this.options.slidesVisible
      const root = this.createElementWithClass('carousel')
      const container = this.createElementWithClass('carousel__container')
      // container.style.width = (ratio * 100) + "%";
      root.appendChild(container)
      this.element.appendChild(root)
      this.children.forEach((child) => {
        let item = this.createElementWithClass('carousel__item')
        item.appendChild(child)
        container.appendChild(item)
      })
  }

  /**
  * @param {string} className
  * @returns {HTMLElement}
  */
  createElementWithClass (className) {
    const div = document.createElement('div')
    div.setAttribute('class', className)
    return div
  }
}

document.addEventListener('DOMContentLoaded', function() {

  new Carousel(document.querySelector('.carousel1', {
    slidesToScroll: 3,
    slidesVisible: 3
  }));

});