<div x-data="{show: true}">
        <div  x-show="show"
        class="pb-[3px]">
        <div  @click="show = false">
            <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 5.5L0 0.5H10L5 5.5Z" fill="#BFC0C4"/>
            </svg>
        </div>
        </div >
        <div x-show="!show">
        <div @click="show = true" class="pb-[3px]">
            <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 5.5L0 0.5H10L5 5.5Z" fill="#010414"/>
            </svg>  
        </div>
        </div>
    </div>
