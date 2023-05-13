export default function createVector(x,y,z){
    const vector = {x,y,z};
    Object.setPrototypeOf(vector, vectorPrototype);
    return vector;
}

const vectorPrototype = {
    getLength()
    {
        return Math.sqrt(Math.pow(this.x,2)+Math.pow(this.y,2)+Math.pow(this.z,2));
    },

    add(vector)
    {
        return new createVector(this.x+vector.x,this.y+vector.y, this.z+vector.z);
    },

    sub(vector)
    {
        return new createVector(this.x-vector.x,this.y-vector.y, this.z-vector.z);
    },

    product(number)
    {
        return new createVector(this.x*number,this.y*number,this.z*number);
    },

    scalarProduct(vector)
    {
        return (this.x*vector.x+this.y*vector.y+this.z*vector.z);
    },

    vectorProduct(vector)
    {
        return new createVector(this.y*vector.z-this.z*vector.y,
                                this.x*vector.z-this.z*vector.x, 
                                this.x*vector.y-this.y*vector.x);
    },

    toString()
    {
        return `(${this.x};${this.y};${this.z})`;
    }
};