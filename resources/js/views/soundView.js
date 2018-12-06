import { elements } from './base';

export const toggleButton = e => {
    e.target.classList.toggle('ayat-suara-button-play');
    e.target.classList.toggle('ayat-suara-button-pause');
}