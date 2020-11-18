function main (stringOne, stringTwo) {

  let possibleSequences = []
  
  for (let i = 0; i < stringOne.length - 1; i++) {
    let stringOneSub = stringOne.slice(i)

    let sequence = []
  
    let posOfCharInSplit = -1
  
    for (let pos = 0; pos < stringOneSub.length; pos++) {
      let char = stringOneSub[pos]
      

      let split = stringTwo.slice(posOfCharInSplit + 1)


      if (posOfCharInSplit >= split.length - 2) {
        sequence = []
      }

      posOfCharInSplit += (stringTwo.indexOf(char) + 1)
      if (posOfCharInSplit >= 0) {
        sequence.push(char)
      }
      console.log(stringOneSub, stringTwo, split, char, posOfCharInSplit)
    }

    possibleSequences.push(
      sequence.join("")
    )
  }
  
  console.log(possibleSequences)
  // return sequence.join("")
  return possibleSequences.sort(
    (a, b) => {
      if (a.length > b.length) {
        return -1
      } else if (a.length < b.length) {
        return 1
      } else {
        return 0
      }
    })[0]
}

export default main