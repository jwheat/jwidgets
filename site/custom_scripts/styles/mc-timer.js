var MessiahTimer = function (interval, callback, data) {
  this.timer = null;
  this.interval = interval;
  this.callback = callback;
  this.data = data;
};//constructor

MessiahTimer.prototype.start = function() {
  var timer = this;
  this.timer = setInterval(function () { timer.callback(timer); }, this.interval);
};//start

MessiahTimer.prototype.stop = function() {
  if (this.timer) {
    clearInterval(this.timer);
    this.timer = null;
  }
};//stop

MessiahTimer.prototype.timerEvent = function() {
  this.callback(this);
};//timerEvent