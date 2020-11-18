
function findPairsWithDifference(arr, diff) {
  // eg: arr = [1, 2, 4, 8, 6, 3, 9] diff = 3
  // loop through every member of arr
  // Calculate sum of diff and element
  // Search for sum in arr
  // Add pair of elem and sum if it exists to an associative results array
  // or go to next elem if sum doesn't exist
  // Afterwards, return the results array

  let results = []

  for (let i = 0; i < arr.length; i++) {
    let sum = arr[i] + diff
    let indexOfSum = arr.indexOf(sum)
    if (indexOfSum >= 0) {
      results.push([ arr[i], arr[indexOfSum] ])
    }
  }

  return results
}

// export default findPairsWithDifference
module.exports = findPairsWithDifference

