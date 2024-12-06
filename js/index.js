
// Vérifie si le jour choisi n'est pas un samedi ou dimanche, sinon = popup
function verifWE(e)
{
    // Vérif le numéro du jour de la semaine
    var day = new Date(e.target.value).getUTCDay();

    if([6,0].includes(day))
    {
        e.preventDefault(); 
        
        // Remet la date à 0
        e.target.value = "";

        alert("La clinique est ouverte du lundi au vendredi. \nVeuillez sélectionner un autre jour.");
    } 
};

// Vérifie que la date est >= à celle d'aujourd'hui
function verifDate()
{
    let dateSelect = document.querySelector('[name="date"]');
    // Recherche de la date du jour
    let today = new Date().toISOString().split("T")[0];
    dateSelect.setAttribute('min', today);
}

// Pour MAJ de la date du jour avant que l'utilisateur choisisse la date 
document.addEventListener('DOMContentLoaded', verifDate);