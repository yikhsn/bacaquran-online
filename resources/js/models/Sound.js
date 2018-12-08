import axios from 'axios';

export default class Sound {
    
    constructor(id){
        this.id = id;
    }

    getSounds(){
        // this.file = "../../../public/assets/mp3/" + this.id + ".mp3";
        console.log(`get sound ${this.file}`);
    }

    toggleSounds(){
        // this.audio = new Audio();

        // this.audio.src = this.file;
        // this.audio.loop = true;

        // if (this.audio.paused){
        //     this.audio.play();
        // }
        // else {
        //     this.audio.pause();
        // }

        console.log(`toggle sound`);
    }


};