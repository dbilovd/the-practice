function solve(matrix) {
  // Bring row 2 with 1 at index 0 to the top
  let temp = matrix[0]
  matrix[0] = matrix[1]
  matrix[1] = temp
  console.log(1, matrix)

  // R2 = 3 * R1 - R2
  temp = matrix[1]
  for(let i = 0; i < temp.length; i++) {
    let newValue = (3 * matrix[0][i]) - temp[i]
    matrix[1][i] = newValue
  }
  console.log(2, matrix)
  
  // R3 = 2 * R1 - R3
  temp = matrix[2]
  for(let i = 0; i < temp.length; i++) {
    let newValue = (2 * matrix[0][i]) - temp[i]
    matrix[2][i] = newValue
  }
  console.log(3, matrix)

  // R1 = ((5/22) * R2) - R1
  temp = matrix[0]
  for (let i = 0; i < temp.length; i++) {
    let newValue = (-(5/22) * matrix[1][i]) + temp[i]
    matrix[0][i] = newValue
  }
  console.log(4, matrix)
   
  // R3 = (R2 + 9) - R1
  temp = matrix[2]
  for(let i = 0; i < temp.length; i++) {
    let newValue = ((13/22) *matrix[1][i]) - temp[i]
    matrix[2][i] = parseFloat(newValue.toFixed(2))
  }
  console.log(5, matrix)

  // R3 = R3 / -9.01
  temp = matrix[2]
  for(let i = 0; i < temp.length; i++) {
    let newValue = temp[i] /  -9.05
    matrix[2][i] = parseFloat(newValue.toFixed(2))
  }
  console.log(6, matrix)

  // R2 = -1/22 * R2
  temp = matrix[1]
  for(let i = 0; i < temp.length; i++) {
    let newValue = (-1/22 * temp[i])
    matrix[1][i] = newValue
  }
  console.log(7, matrix)

  // R1 = 0.13 * R3 + R1
  temp = matrix[0]
  for(let i = 0; i < temp.length; i++) {
    let newValue = (0.136 * matrix[2][i]) + temp[i]
    matrix[0][i] = parseFloat(newValue.toFixed(2))
  }
  console.log(8, matrix)

  // R2 = 0.227 * R3 + R2
  temp = matrix[1]
  for(let i = 0; i < temp.length; i++) {
    let newValue = (0.227 * matrix[2][i]) + temp[i]
    matrix[1][i] = parseFloat(newValue.toFixed(2))
  }
  console.log(9, matrix)
  
  return [
    matrix[0][3],
    matrix[1][3],
    matrix[2][3]
  ]
}


let matrix = [
  [3, 7, -2, 2],
  [1, -5, 1, 13],
  [2, 3, -10, -23]
]
let result = solve(matrix)
console.log(result)
