import main from './index.js'

let firstTest = main("ABAZDC", "BACBAD")
if (firstTest == "ABAD") {
  console.log("Passed!")
} else {
  console.error("Failed!")
  console.log(`Expected ABAD but got ${firstTest}`)
}
console.log()

let secondTest = main("AGGTAB", "GTAB")
if (secondTest == "GTAB") {
  console.log("Passed!")
} else {
  console.error("Failed!")
  console.log(`Expected GTAB but got ${secondTest}`)
}
