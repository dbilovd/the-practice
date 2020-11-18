
let runs = 0
function search_bak(value, arr) {
  runs++
  if (arr.length == 1) {
    return arr[0] == value
  }

  let middleIndex = Math.floor(arr.length / 2)

  let valueAtMiddle = arr[middleIndex]
  if (value == valueAtMiddle) {
    console.log("Found value", value)
    return value
  }

  if (value < valueAtMiddle) {
    return search(value, arr.slice(0, middleIndex))
  } else {
    return search(value, arr.slice(middleIndex))
  }
}

function searchWithoutRecursion(value, arr) {
  let min = 0
  let max = arr.length

  while (min <= max) {
    runs++
    let mid = Math.floor(min + (max - min) / 2)

    if (arr[mid] == value) {
      return mid
    } else if (arr[mid] < value) {
      min = mid + 1 
    } else {
      max = mid - 1
    }
  }

  return false
}

function searchWithRecursion(value, arr, min, max) {
  runs++
  min = min || 0
  max = max || arr.length

  if (min > max) {
    return false
  }

  let mid = Math.floor(min + (max - min) / 2)
  if (arr[mid] == value) {
    return mid
  } else if (arr[mid] < value) {
    return searchWithRecursion(value, arr, mid + 1, max)
  } else {
    return searchWithRecursion(value, arr, min, mid - 1)
  }
}


let primes = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97]
let found = searchWithoutRecursion(71, primes)
console.log(found, "Runs:", runs)
runs = 0
found = searchWithRecursion(71, primes)
console.log(found, "Runs w/ R:", runs)

runs = 0
found = searchWithoutRecursion(3, primes)
console.log(found, "Runs:", runs)
runs = 0
found = searchWithRecursion(3, primes)
console.log(found, "Runs w/ R:", runs)

runs = 0
found = searchWithoutRecursion(108, primes)
console.log(found, "Runs:", runs)
runs = 0
found = searchWithRecursion(108, primes)
console.log(found, "Runs w/ R:", runs)

runs = 0
found = searchWithoutRecursion(20, primes, 0, primes.length - 1)
console.log(found, "Runs:", runs)
runs = 0
found = searchWithRecursion(20, primes)
console.log(found, "Runs w/ R:", runs)

