const textarea = document.querySelector("textarea"),
voicelist = document.querySelector("select"),
speechBtn = document.querySelector("button");

let synth = speechSynthesis;

function voice() {
    for(let voice of synth.getVoices()){
        console.log(voice);
        let option = '<option values="${voice.name}">${voice.name} (${voice.lang})</option>';
    }
}

function textToSpeech(text){
    let utternance = new SpeechSynthesisisUtterance(text);
    speechSynthesis.speak(utternance);
}

speechBtn.addEventListener("click", e =>{
    e.preventDefault()
    if(textarea.value !== ""){
        textToSpeech(textarea.value);
    }
});
