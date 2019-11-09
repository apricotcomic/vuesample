new Vue({
  el: '#app',
  data: {
    offsetX: 0,
    offsetY: 0,
    test: "test"
  },
  methods: {
    onmousemove: function(e) {
      this.offsetX = e.offsetX;
      this.offsetY = e.offsetY;
    }
  }
});
