import axios from 'axios';

export default class Sound {
    
    constructor(id){
        this.id = id;
    }

    getSounds(){
        try {
            // this.file = axios(`http://127.0.0.1:8000/api/surat/${this.id}`);
            console.log(`get sound ${this.id}`);
        } catch (error) {
            console.log(error);
        }
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