const myDate = new Date();
const xmas = Date.parse("Dec 25, " + myDate.getFullYear())
const today = Date.parse(myDate)

const daysToChristmas = Math.round((xmas - today) / (1000 * 60 * 60 * 24))


if (daysToChristmas == 0)
    $('#days').text(" Hoy es Navidad!! Feliz Navidad!");

if (daysToChristmas < 0)
    $('#days').text("La Navidad empez� hace " + -1 * (daysToChristmas) + " d�as.");

if (daysToChristmas > 0)
    $('#days').text(daysToChristmas + " d�as para Navidad!");