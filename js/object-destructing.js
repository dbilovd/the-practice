function removeProperty (obj, prop) {
  let newObj;
  let foo;

  ({ foo, ...newObj } = obj)

  return newObj
}

let object = {
  foo: 2,
  bar: 3,
  baz: 11
}
let objWithoutProp = removeProperty(object, 'bar')
console.log(objWithoutProp)
