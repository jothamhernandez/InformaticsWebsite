(function () {
	Vue.component('informatics-slider', {
		props: {
			items: Object,
			sliderSpeed: String
		},
		data() {
			return {
				content: null,
				slide: 1,
				currentSlide: 1,
				intervalId: null,
				dots: 0
			}
		},
		mounted() {
			$ = jQuery;
			this.content = $('#slider-content')[0];
			this.dots = Math.ceil($('#slider-content')[0].scrollWidth / $('#slider-content').width());
			this.intervalId = setInterval(this.interval, this.sliderSpeed);
		},
		methods: {
			changeSlide(e) {
				this.currentSlide = $(e.target).data('slide');
				let slide = Math.ceil(($(e.target).data('slide') * $('#slider-container').width()) - $('#slider-container').width());

				$('#slider-content').animate({
					scrollLeft: slide
				});
			},
			loopSlide(slide) {
				slide = (slide * $('#slider-container').width()) - $('#slider-container').width();
				$('#slider-content').animate({
					scrollLeft: slide
				});
			},
			interval() {
				this.loopSlide(this.currentSlide++);
				if (this.currentSlide > this.dots) {
					this.currentSlide = 1;
				}
			},
			hover(status) {
				if (status == 'out') {
					this.intervalId = setInterval(this.interval, this.sliderSpeed);
				}
				if (status == 'in') {
					clearInterval(this.intervalId);
				}
			}
		},
		template:
		`<div id="slider-container">
<div id="slider-content" class="d-flex align-items-center justify-content-start flex-nowrap" style="overflow:hidden">
<div v-for="item in items" v-if="item" class="col-md-4 text-center flex-shrink-0">
<img :src="item.link" class="img-fluid">
</div>   
</div>
<div class="dots d-flex align-items-center justify-content-center">
<div class="mx-2" style="width: 10px; height: 10px; background-color: gray; border-radius: 50%; cursor:pointer;" v-for="(dot, value) in dots" @click="changeSlide" :data-slide="dot" @mouseover="hover('in')" @mouseout="hover('out')"></div>
</div>
</div>

`
	});
})();