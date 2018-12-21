require('bootstrap');

import Search from './models/Search';
import * as searchView from './views/searchView';
import * as soundView from './views/soundView';
import  { elements } from './views/base';
import Sound from './models/Sound';

const state = {};

elements.searchForm.addEventListener('submit', e => {
    e.preventDefault();

    controlSearch();

    searchView.clearInput();
});

elements.searchInput.addEventListener('keyup', () => {
    searchView.resizeSearchBox();
    
    controlSearch();
});

elements.ayat.forEach( cur => {    
    cur.addEventListener('click', e => {
        e.preventDefault();
        
        controlSound(e);
    });
});

const controlSound = async (e) => {
    const id = e.target.parentNode.parentNode.parentNode.id;

    state.sound = new Sound(id);

    try {
        
        state.sound.getSounds();

        soundView.toggleButton(e);

        state.sound.toggleSounds();



        // let musik = new Audio();

        // musik.src = "~/project/quran2.0/public/assets/mp3/1.mp3";
        // musik.loop = true;

        // if(musik.paused){
        //     musik.play();
        //     soundView.toggleButton(e);
        // }else {
        //     musik.pause();
        //     soundView.toggleButton(e);
        // }

    } catch (error) {
        
    }
}

const controlSearch = async () => {

    const query = searchView.getInput();

    if (query) {

        state.search = new Search(query);

        searchView.clearResult();

        try {
            await state.search.getResults();

            searchView.renderResult(state.search.result);
        } catch (error) {
            console.log(`error while trying get data: ${error}`);      
        }
    }
}