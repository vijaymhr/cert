const appointment_name = documet.getElementById('appointment_name')
const appointment_email = documet.getElementById('appointment_email')
const appointment_phone = documet.getElementById('appointment_phone')
const appointment_message = documet.getElementById('appointment_message')
const errorElemenr = documet.getElementById ('error')


form.addEventListener('submit',(e)=> {
    let messages = []
    if (appointment_name.value === '' || appointment_name.value === null) {
        messages.push ('Full name is required')
    }
    if (messages.length >0)
    e.preventDefault()
})

