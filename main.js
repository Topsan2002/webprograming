var number = parseInt(prompt('Enter a number: '));
if (number >= 2) {
    for (i = 1; i <= 10; i++) {
        document.getElementById('multiplication-table').innerHTML += `${number} * ${i} = ${number*i}<br />`;
    }
} else {
    alert('Input Wrong!!!');
    document.getElementById('multiplication-table').innerHTML = 'Input Wrong!!!';
}