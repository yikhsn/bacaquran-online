import { elements } from './base';

export const getInput = () => elements.searchInput.value;

export const clearInput = () => {
    elements.searchInput.value = '';
}

export const clearResult = () => {
    elements.searchResList.innerHTML = '';
}

export const renderResult = surats => {
    surats.forEach( el => renderSurat(el));
}

export const resizeSearchBox = () => {
    elements.searchBox.style.height = "30vh";

    elements.searchBoxLogo.style.display = "none";
}

const renderSurat = surat => {
    const markup = 
        `<a href="/surat/${ surat.nomor_surat }" class="col-md-6 col-12 surats--box__single">
            <li class="row surat">
                <div class="col-1 surat--nomor">${surat.nomor_surat}</div>
                <div class="col-5">
                    <h3 class="surat--nama">${ surat.nama_surat }</h3>
                    <h4 class="surat--nama-arti">${ surat.arti_nama }</h4>
                </div>
                <div class="col-5">
                    <div class="surat--nama-arab">${ surat.nama_surat_arab }</div>
                </div>
            </li>
        </a>`;

    elements.searchResList.insertAdjacentHTML('beforeend', markup);
};