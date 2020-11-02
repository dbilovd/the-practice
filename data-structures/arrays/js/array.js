let array = []

function size (array) {
	let counter = 0
	for (let i = 0; i < array.length; i++) {
		counter++
	}
	return counter
}

function addToEnd (value) {
	let lastIndex = array.length - 1
	array[lastIndex + 1] = value
}

function addToBeginning (value) {
	let lastIndex = array.length - 1
	for (let itemIndex = lastIndex; itemIndex >= 0; itemIndex--) {
		let newIndex = itemIndex + 1
		array[newIndex] = array[itemIndex]
	}
	array[0] = value
}

addToEnd(2)
addToEnd(15)
addToEnd(30)
console.log(array)

addToBeginning(15)
addToBeginning(30)
console.log(array)

console.log(size(array))
