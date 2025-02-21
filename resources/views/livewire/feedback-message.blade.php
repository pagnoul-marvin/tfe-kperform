<div class="feedback_message flex"
     x-data="{
        visible: @entangle('visible'),
        progress: 0,
        duration: 5000,
        startTimer() {
            let start = Date.now();
            let interval = setInterval(() => {
                let elapsed = Date.now() - start;
                this.progress = (elapsed / this.duration) * 62.8; // Ajusté pour le cercle 24x24

                if (this.progress >= 62.8) {
                    clearInterval(interval);
                    this.visible = false;
                }
            }, 50);
        }
     }"
     x-show="visible"
     x-transition:enter="success-message-transition"
     x-transition:enter-start="success-message-enter"
     x-transition:enter-end="success-message-enter-active"
     x-transition:leave="success-message-transition"
     x-transition:leave-start="success-message-leave"
     x-transition:leave-end="success-message-leave-active"
     x-on:start-message-timer="startTimer()">

    <p class="eaves text">{{ __("texts.$message") }}</p>

    <svg class="circle-container" width="24" height="24" viewBox="0 0 24 24">
        <circle cx="12" cy="12" r="10" stroke="black" stroke-width="2" fill="none"
                stroke-dasharray="62.8"
                :stroke-dashoffset="progress"
                stroke-linecap="round"
                transform="rotate(-90 12 12)">
        </circle>
    </svg>

</div>
